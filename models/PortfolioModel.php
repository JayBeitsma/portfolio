<?php

class PortfolioModel
{
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getProjects() {
        $sql = "SELECT * FROM projects";
        $result = $this->db->query($sql);
        return $result;

    }
}