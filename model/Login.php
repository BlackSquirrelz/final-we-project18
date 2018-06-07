<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 07.06.18
 * Time: 15:12
 */

namespace model;

class Login
{

public static function verifyUser($email, $password, $connection) {
    $stmt = $connection->prepare("SELECT * FROM user WHERE EMAIL = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($password == $user['PASSWORD'])
    {
        return true;
    } else {
        return false;
    }
}

}