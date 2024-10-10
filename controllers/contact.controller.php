<?php
function contact() {
    //require needed viles
    require 'dbconnect.php';
    require 'views/contact.view.php';

    //submit post form contact form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = "INSERT INTO messages(name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

        $conn->exec($sql);

        header("Location: /contact");
    }
}