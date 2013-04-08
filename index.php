<?php
//require general classes
require("classes/loader.php");
require("classes/basecontroller.php");
//require("classes/basemodel.php");
//require the model classes
//require("models/home.php");
//require the controller
require("controllers/home.php");
//create the new controller and execute the action
$loader = new Loader();
$controller = $loader->CreateController();
$controller->ExecuteAction();
?>