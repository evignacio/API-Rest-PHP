<?php

namespace model;

class Client{

    public function getClients()
    {
       return file_get_contents('../db/db.json', true);
    }

    public function setClient($client)
    {
        $dbData = json_decode(file_get_contents('../db/db.json', true));
        $dbData[] = $client;
        file_put_contents('../db/db.json', json_encode($dbData));
    }
}