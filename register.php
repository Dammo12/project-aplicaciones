<?php

    include("db.php");

    if(isset($_POST['save_user'])){
        $name = $_POST['name'];
        $lastname1 = $_POST['lastname1'];
        $lastname2 = $_POST['lastname2'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $admin = false;
        
        $query = "INSERT INTO users(name, lastname1, lastname2, email, password, admin) VALUES('$name', '$lastname1', '$lastname2', '$email', '$pass', $admin)";

        $result = mysqli_query($conn, $query);

        if(!$result) {
            die("Query failed");
        }

        echo 'Saved';
    }
?>