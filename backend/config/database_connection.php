<?php
    define('USER','dev'); // Nom d'utilisateur du compte phpMyAdmin
    define('PASSWD',''); // Mot de passe du compte utilisateur phpMyAdmin
    define('SERVER','localhost'); // URL du serveur. Ici localhost puisque le serveur n'est pas hébergé en ligne
    define('BASE','php-vue-cantine'); // Le nom de la base de données tel qu'il est déclaré dans phpMyAdmin

    $dsn='mysql:dbname='.BASE.';host='.SERVER;

    try{
        $pdo=new PDO($dsn,USER,PASSWD);
        echo ('Successful database connection<br>');
    }
    catch(PDOException $e){
        echo ('Unsuccessful database connection : '. $e->getMessage() . '<br>');
        exit();
    }
?>