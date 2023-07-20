<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['user_email'])){

    include "../db_conn.php";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        if (empty($id)) {
            $em = "Error Occurred";
            header("Location: ../admin.php?error=$em");
            exit;
        }
        else{

            $sql1 = "SELECT * FROM books WHERE id=?";
            $stmt = $conn->prepare($sql1);
            $res = $stmt->execute([$name, $id]);

            $sql = "DELETE books SET name=? WHERE id=?";
            $stmt = $conn->prepare($sql);
            $res = $stmt->execute([$name, $id]);

            if($res){
                $sm = "Successfully Updated";
                header("Location: ../edit-author.php?success=$sm&id=$id");
                exit;
            }
            else{
                $em = "Unknown Error Occurred";
                header("Location: ../edit-author.php?error=$em&id=$id");
                exit;
            }
        }

    }else{
        header("Location: ../admin.php");
        exit;
    }
}else{
    header("Location: ../admin.php");
    exit;
}

?>