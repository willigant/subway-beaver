<?php

/*
 * Index page form sends people here
 * capture email and store in database and send back to some page saying thanks
 *
 */

// Config
$host   = 'localhost';
$dbname = 'SubwayBeaver';
$user   = 'root';
$pass   = 'word';


require_once 'models/user.php';
require_once 'models/schedule.php';

try {

    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    if ($email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL ) {

        $user = new user($email);

        $user->updateSchedule($_POST);

        header('location:/stats.php');

    } else {

        header('location:/bad_email.php');

    }
} catch (Exception $e) {

    echo 'rut ro';
}




    
    




    

