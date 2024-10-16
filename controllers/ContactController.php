<?php

require_once 'models/ContactModel.php';
require_once 'dbconnect.php';

class ContactController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function submitForm() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $message = htmlspecialchars($_POST['message']);

            $messageModel = new ContactModel($this->db);
            if ($messageModel->insertMessage($name, $email, $phone, $message)) {
                echo "Message has been sent!";
            } else {
                echo "Error: Could not save the message.";
            }
        }
    }
}