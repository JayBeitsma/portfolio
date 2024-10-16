<?php
require 'dbconnect.php';
require './controllers/about.controller.php';
require './controllers/ContactController.php';
require './controllers/index.controller.php';
require './controllers/PortfolioController.php';
require './controllers/ProjectController.php';

//require 'views/index.view.php';
$requestPage = $_SERVER['REQUEST_URI'];
//$requestPage = rtrim($requestPage, '/');
switch ($requestPage) {
    case '/':
        require __DIR__ . '/views/index.view.php';
        break;
    case '/portfolio':
        $portfolioModel = new PortfolioModel($conn);
        $portfolioController = new PortfolioController($portfolioModel);
        $projects = $portfolioController->displayProjects();
        require __DIR__ . '/views/portfolio.view.php';
        break;
    case '/project':
        $projectModel = new ProjectModel($conn);
        $projectController = new ProjectController($projectModel);
        $projects = $projectController->displayProject();
        require __DIR__ . '/views/project.view.php';
        break;
    case '/about':
        require __DIR__ . '/views/about.view.php';
        break;
    case '/contact':
        $contactController = new ContactController($conn);
        $contactController->submitForm();
        require __DIR__ . '/views/contact.view.php';
        break;
    default:
        require __DIR__ . '/views/index.view.php';
        break;
}