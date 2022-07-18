<?php
session_start();
require './classes/user.class.php';
require './classes/user/super-admin.class.php';
require './classes/user/admin.class.php';
require './classes/user/client.class.php';
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

        <h2>User Classes testing area</h2>
        <!-- User class testing area -->
        <?php
        $samy = new SuperAdmin('samy', 'samy@samy.samy', date('Y-m-d'), false, true);

        
        ?>

    </body>
</html>