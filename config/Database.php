<?php


class Database extends PDO
{

    protected $array = array();

    function __construct()
    {
        parent::__construct('mysql:host=https://77.245.159.97;dbname=feyzaer1_mivento', 'feyzaer1_mivento', '&qXVrO7.8tmh');

        $this->alert = new Alert();
    }



}


?>