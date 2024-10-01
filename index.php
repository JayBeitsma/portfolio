<?php

//require 'views/index.view.php';
 $requestPage = $_SERVER['REQUEST_URI'];

 switch ($requestPage) {
     case '/':
        require __DIR__ . '../controllers/index.controller.php';
        break;
     case '/portfolio':
        require __DIR__ . '../views/portfolio.view.php';
        break;
     case '/about':
        require __DIR__ . '../views/about.view.php';
        break;
     case '/contact':
        require __DIR__ . '../views/contact.view.php';
        break;
     default:
        require __DIR__ . '../views/index.view.php';
        break;
 }