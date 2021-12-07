<?php
session_start();

define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('VIEW_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);

include_once ROOT_PATH . 'src/controller.php';
include_once ROOT_PATH . './src/template.php';

$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action = $_GET['action'] ?? $_POST['action'] ?? 'default';

if($section == 'contact'){

  include ROOT_PATH . 'controller/contactUsPage.php';

  $contactController = new ContactController();
  $contactController->runAction($action);

}elseif($section == 'about'){
  include ROOT_PATH . 'controller/aboutUsPage.php';
  $aboutController = new AboutUsController();
  $aboutController->runAction($action);

}elseif($section == 'home'){
  include ROOT_PATH . 'controller/homePage.php';
  $homeController = new HomePageController();
  $homeController->runAction($action);

}