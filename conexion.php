<?php
    $servidor = "localhost";
    $username = "root";
    $password = "luis75jara10";
    $bd = "proyecto";

    try {
        $conn = new PDO("mysql:host=$servidor;dbname=$bd;", $username, $password);
      } catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage());
      }
?>