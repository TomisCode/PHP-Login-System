<?php

// If there is no constant defined called __CONFIG__, do not load file
    if(!defined('__CONFIG__')) {
        exit('You do not have a config file');
    }

    define('ALLOW FOOTER', true);
    // My config is below

    // Include the DB.php file
    Include_once "inc/classes/DB.php";

    $con = DB::getConnection();











    ?>