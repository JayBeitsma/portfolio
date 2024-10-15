<?php

class ContactModel
{
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function insertMessage($name, $email, $phone, $message) {
        $query = "INSERT INTO messages (name, email, phone, message) VALUES (:name, :email, :phone, :message)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {
            return true;
        } else {
            $error = $stmt->errorInfo();
            echo "Database Error: " . $error[2];  // Debugging: Display DB error
            return false;
        }
    }
}