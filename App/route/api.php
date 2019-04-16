<?php
require '../../vendor/autoload.php';

use controller\ControllerClient;


header('Content-type: application/json');
$path = explode('/', $_GET['path']);

$method = $_SERVER['REQUEST_METHOD'];
$request = file_get_contents('php://input');

$controllerClient = new ControllerClient();

if($method === 'GET') { 
  $controllerClient->actionIndex();
  exit();

}elseif($method === 'POST') {
    
    try {
        $controllerClient->actionStore($request);
        exit();

    } catch(\Exception $e) {
        return json_encode([500]);
    }
}
