<?php 
error_reporting(1);

    if (isset($_POST['email']) && isset($_POST['password'])){
        include "../db_conn.php";
        

        include "form-validation.php";

        $email =$_POST['email'];
        $password = $_POST['password'];

        $text = "Email";
        $location = "../login.php";
        $ms = "error";
        is_empty($email, $text, $location, $ms, "");

        $text = "Password";
        $location = "../login.php";
        $ms = "error";
        is_empty($password, $text, $location, $ms, "");

        // echo 'worg';
        // exit;


        $sql = "SELECT * FROM users WHERE email =?";
        // echo $sql;
        // exit;
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);

        if($stmt->rowCount() === 1){
            echo "Yeah!";
        }
        else{
            echo "Nope";
        }
    }
    else {
        // echo'else';
        // exit;
        header("Location: ./login.php");
    }
    
?>