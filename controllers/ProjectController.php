<?php
require_once 'models/ProjectModel.php';
class ProjectController
{
    // create model
    protected $model;

    // construct model
    public function __construct(ProjectModel $model) {
        $this->model = $model;
    }

    //
    public function displayProject() {
        return $this->model->getProjectById();
    }
}