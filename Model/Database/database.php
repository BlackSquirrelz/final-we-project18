<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 05.06.18
 * Time: 22:56
 */

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "weproject";

try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "YOU MADE IT";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
$conn = null;