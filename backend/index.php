<?php
session_start();

// Insert requires here
require './classes/database_handler.class.php';

// Import stuff here

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP Cantine testing grounds</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>PHP Cantine testing grounds</h1>

        <!-- test code here -->
        <?php

        $db = new DatabaseHandler;
        $db -> connectToDatabase();
        ?>

    </body>
</html>