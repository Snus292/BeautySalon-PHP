<?php
session_start();
// session_destroy();
require_once '../inc/Database.php';  // База данных

include_once("modelAdmin/ModelAdmin.php");
include_once("modelAdmin/ModelAdminServices.php");
include_once("modelAdmin/ModelAdminCategory.php");

include_once("controllerAdmin/ControllerAdmin.php");
include_once("controllerAdmin/ControllerAdminServices.php");

include('routeAdmin/routingAdmin.php');

echo $response;
