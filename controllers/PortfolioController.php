<?php
require_once 'models/PortfolioModel.php';
require_once 'dbconnect.php'; // Use the provided DB connection
class PortfolioController
{
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function displayProjects() {
        $projects = $this->model->getProjects();
        return $projects;
    }
}