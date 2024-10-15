<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'dbconnect.php';
require './controllers/about.controller.php';
require './controllers/ContactController.php';
require './controllers/index.controller.php';
require './controllers/portfolio.controller.php';

//require 'views/index.view.php';
$requestPage = $_SERVER['REQUEST_URI'];
$requestPage = rtrim($requestPage, '/');
switch ($requestPage) {
    case '/':
        require __DIR__ . '/views/index.view.php';
        break;
    case '/portfolio':
        require __DIR__ . '/views/portfolio.view.php';
        break;
    case '/about':
        require __DIR__ . '/views/about.view.php';
        break;
    case '/contact':
        $contactController = new ContactController($conn);
        $contactController->handleFormSubmission();  // This will either show the form or process it
        require __DIR__ . '/views/contact.view.php';
        break;
    default:
        require __DIR__ . '/views/index.view.php';
        break;
}