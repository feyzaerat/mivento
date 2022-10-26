<?php


class Database extends PDO
{

    protected $array = array();

    function __construct()
    {
        parent::__construct();



        $this->alert = new Alert();
    }



}


?>