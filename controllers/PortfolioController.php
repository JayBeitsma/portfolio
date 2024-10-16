<?php
require_once 'models/PortfolioModel.php';
class PortfolioController
{
    // create model
    protected $model;

    // construct model
    public function __construct(PortfolioModel $model) {
        $this->model = $model;
    }

    //
    public function displayProjects() {
        return $this->model->getAll();
    }
}