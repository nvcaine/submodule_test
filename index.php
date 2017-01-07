<?php
require_once("libs/smarty-3.0.8/libs/Smarty.class.php");
require_once("framework/main.php");

$appInit = new AppInit("framework"); // initialize the framework
$appFacade = new AppFacade(new SettingsManager("settings.json")); // define server settings and sections

Autoloader::init("app"); // init the server
//DBWrapper::configure("[server]", "[user]", "[password]", "[database]"); // init the database connection

$currentPage = $appFacade->getCurrentSection("service");

$appFacade->handleSectionRequest($currentPage); //autoload and run section controller entry-point method
?>