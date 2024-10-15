<?php

require_once 'models/ContactModel.php';
require_once 'dbconnect.php'; // Use the provided DB connection

class ContactController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function handleFormSubmission() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
            echo "help";
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $message = htmlspecialchars($_POST['message']);

            echo "Name: $name, Email: $email, Phone: $phone, Message: $message<br>"; // Debugging: Print form data

            $messageModel = new ContactModel($this->db);
            if ($messageModel->insertMessage($name, $email, $phone, $message)) {
                echo "Message has been sent!";
            } else {
                echo "Error: Could not save the message.";
            }
        } else {
            //stay empty
        }
    }
}