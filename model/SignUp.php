<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 07.06.18
 * Time: 15:12
 */

namespace model;

class SignUp
{

    public static function registerUser($firstname, $lastname, $email, $password, $connection)
    {
        $stmt = $connection->prepare("INSERT INTO user (FIRST_NAME, LAST_NAME, EMAIL, PASSWORD) VALUES (:first_name, :last_name, :email, :password)");
        $stmt->bindParam(':first_name', $firstname);
        $stmt->bindParam(':last_name', $lastname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    }

}