README
======

![license](https://img.shields.io/packagist/l/bafs/via.svg?style=flat-square)
![PHP 5.5+](https://img.shields.io/badge/PHP-5.5+-brightgreen.svg?style=flat-square)

What is Vitium?
-----------------

Vitium is a PHP error manager. Auto detect syntax error, notice, deprecated na redirect to class handler.

Installation
------------

The best way to install is to use the composer by command:

    composer require newclass/vitium
    composer install

Use example
-------------
    use Vitium\ErrorManager;
    
    $errorManager=new ErrorManager();
    $errorManager->addHandler(new LogErrorHandler()); //Implement ErrorHandlerInterface
