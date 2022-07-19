<?php
session_start();

// Insert requires here
require './config/database_connection.php';
require './classes/user/client.class.php';

// Import stuff here
require './classes/child.class.php';

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

        $john = new Client(false, false, true, false, 'User', 3, 'John', 'Doe', 'M', 'JDoe', 'jdoe@orange.fr', '2021-08-05', '0123456789', '2 rue des marchands', 'paris', '111111');


        $john = new Client(2, true, false, 'User', 3, 'John', 'Doe', 'M', 'JDoe', 'jdoe@orange.fr', '2021-08-05', '0123456789', '2 rue des marchands', 'paris', '111111');

        
        var_dump($john -> getCurrentUserInformation()) ;

        ?>

    </body>
</html>