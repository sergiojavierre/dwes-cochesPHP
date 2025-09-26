<?php

include_once "DAOCoches.php";
include_once __DIR__ . "/../../modelo/Coche.php";

class DAOCochesMySQL implements DAOCoches
{

    private $pdo;

    public function __construct()
    {
        $username = 'root';
        $password = 'root';
        $host = 'mysql';
        $port = '3306';
        $dbname = 'concesionario';

        $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";

        try {
            $this->pdo = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function guarda($coche)
    {
        $query = 'INSERT INTO coches (matricula, modelo) VALUES (?, ?)';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$coche->matricula, $coche->modelo]);
    }

    public function lista()
    {
        $query = 'SELECT * FROM coches';
        $stmt = $this->pdo->query($query);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $coches = [];
        foreach ($results as $row) {
            $coche = new Coche($row['matricula'], $row['modelo']);
            array_push($coches, $coche);
        }

        return $coches;
    }
}
