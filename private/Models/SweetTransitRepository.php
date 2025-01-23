<?php

namespace STC\Models;

use Exception;
use PDO;
use PDOException;

class SweetTransitRepository
{
    //<editor-fold desc="Attributes" defaultstate="collapsed">

    //</editor-fold>

    //<editor-fold desc="Getter & Setter" defaultstate="collapsed">

    //</editor-fold>

    /**
     * @throws Exception
     */
    public function __construct()
    {
        return $this->getConnection();
    }

    /**
     * @throws Exception
     */
    protected function getConnection(): PDO
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=sweet_transit", $username, $password);

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;

        } catch(PDOException $e) {
            throw new Exception("Connection failed: " . $e->getMessage());
        }
    }
}