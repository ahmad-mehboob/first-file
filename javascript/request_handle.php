<?php
    $connection = new mysqli("localhost", "root", "", "first");

    

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    if ($username=="" || $email=="" || $password=="") {
        echo json_encode(['msg'=>'Please fill the form']);
    } else {
        $connection->query("INSERT INTO userinfo SET username='$username', email='$email', password='$password'");
        echo json_encode(['msg'=>'Submitt sucessfully']);
    }
    

    

?>