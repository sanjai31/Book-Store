<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {

    include "../db_conn.php";
    include "form-validation.php";
    include "func-file-upload.php";

    if (isset($_POST['book_id']) && isset($_POST['book_title']) && isset($_POST['book_description']) &&
        isset($_POST['book_author']) && isset($_POST['book_category']) && isset($_POST['current_cover']) &&
        isset($_POST['current_file'])) {

        $id = $_POST['book_id'];
        $title = $_POST['book_title'];
        $description = $_POST['book_description'];
        $author = $_POST['book_author'];
        $category = $_POST['book_category'];
        $current_cover = $_POST['current_cover'];
        $current_file = $_POST['current_file'];

        $fields_to_check = [
            ['value' => $title, 'text' => 'Book title'],
            ['value' => $description, 'text' => 'Book description'],
            ['value' => $author, 'text' => 'Book author'],
            ['value' => $category, 'text' => 'Book category']
        ];
        foreach ($fields_to_check as $field) {
            is_empty($field['value'], $field['text'], "../edit-book.php?id=$id&error", "id=$id&error", "");
        }

        $book_cover_URL = $current_cover;
        $file_URL = $current_file;

        if (!empty($_FILES['book_cover']['name'])) {
            $allowed_image_exs = array("jpg", "jpeg", "png");
            $path = "cover";
            $book_cover = upload_file($_FILES['book_cover'], $allowed_image_exs, $path);
            if ($book_cover['status'] == "success") {
                $book_cover_URL = $book_cover['data'];
                unlink("../assets/cover/$current_cover");
            } else {
                $em = $book_cover['data'];
                header("Location: ../edit-book.php?error=$em&id=$id");
                exit;
            }
        }

        if (!empty($_FILES['file']['name'])) {
            $allowed_file_exs = array("pdf", "docx", "pptx");
            $path = "files";
            $file = upload_file($_FILES['file'], $allowed_file_exs, $path);
            if ($file['status'] == "success") {
                $file_URL = $file['data'];
                unlink("../assets/files/$current_file");
            } else {
                $em = $file['data'];
                header("Location: ../edit-book.php?error=$em&id=$id");
                exit;
            }
        }

        $sql = "UPDATE books SET title=?, author_id=?, description=?, category_id=?, cover=?, file=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $res = $stmt->execute([$title, $author, $description, $category, $book_cover_URL, $file_URL, $id]);

        if ($res) {
            $sm = "Successfully Updated";
            header("Location: ../edit-book.php?success=$sm&id=$id");
            exit;
        } else {
            $em = "Unknown Error Occurred";
            header("Location: ../edit-book.php?error=$em&id=$id");
            exit;
        }
    } else {
        header("Location: ../admin.php");
        exit;
    }
} else {
    header("Location: ../admin.php");
    exit;
}
