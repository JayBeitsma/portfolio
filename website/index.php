<?php
require 'dbconnect.php';
require './controllers/ContactController.php';
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
    //With ChatGPT assistance
    case (preg_match('/\/project\?id=\d+/', $requestPage) ? true : false): // Match /project?id=<number> will check if the url matches this template
        parse_str(parse_url($requestPage, PHP_URL_QUERY), $queryParams);// Parse the project ID from the URL
        $projectId = $queryParams['id'] ?? null;

        // Check for valid projectId
        if ($projectId) {
            $projectModel = new ProjectModel($conn);
            $projectController = new ProjectController($projectModel);
            $project = $projectController->displayProject($projectId); // Pass the ID to the controller
            require __DIR__ . '/views/project.view.php';
        } else {
            echo "Invalid project ID.";
        }
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