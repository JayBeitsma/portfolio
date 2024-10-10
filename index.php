<?php

//require 'views/index.view.php';
 $requestPage = $_SERVER['REQUEST_URI'];

 switch ($requestPage) {
     case '/':
        require __DIR__ . '../controllers/index.controller.php';
        break;
     case '/portfolio':
        require __DIR__ . '../controllers/portfolio.controller.php';
        break;
     case '/about':
        require __DIR__ . '../controllers/about.controller.php';
        break;
     case '/contact':
        require __DIR__ . '../controllers/contact.controller.php';
        contact();
        break;
     default:
        require __DIR__ . '../controllers/index.controller.php';
        break;
 }