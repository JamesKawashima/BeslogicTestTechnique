<?php
namespace models;
require_once(dirname(__DIR__)."/core/dbconnectionmanager.php");



class FrontPage{
    private $dbConnection;

    function __construct(){
        $conManager = new \database\DBConnectionManager();

        $this->dbConnection = $conManager->getConnection();
    }
}
?>