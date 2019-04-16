<?php

namespace controller;

use model\Client;

class ControllerClient{
    
    public function actionIndex()
    {
       $client = new Client();
       echo $client->getClients();

    }

    public function actionStore($request)
    {
        $jsonBody = json_decode($request, true);
        $client = new Client();
        $newClient[] = ['id' => time(), 'name' => $jsonBody[0]['name'], 'age' => $jsonBody[0]['age']];
        $client->setClient($newClient);
        echo json_encode($newClient);
    }
}