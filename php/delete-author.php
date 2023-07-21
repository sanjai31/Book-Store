<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {
    include "../db_conn.php";

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        if (empty($id)) {
            $em = "Error Occurred";
            header("Location: ../admin.php?error=$em");
            exit;
        } else {

            $sql = "DELETE FROM authors WHERE id=?";
            $stmt = $conn->prepare($sql);
            $res = $stmt->execute([$id]);
            if ($res) {
                $sm = "Successfully Removed";
                header("Location: ../admin.php?success=$sm");
                exit;
            } else {
                $em = "Error Occurred";
                header("Location: ../admin.php?error=$em");
                exit;
            }
        }

    } else {
        header("Location: ../admin.php");
        exit;
    }
} else {
    header("Location: ../admin.php");
    exit;
}
?>
