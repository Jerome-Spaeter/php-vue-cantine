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
    // $database = new DB();
    // $db = $database->getConnection();

    // $item = new User($db);

    // $data = json_decode(file_get_contents("php://input"));

    // $item->user_name = $data->user_name;
    // $item->user_email = $data->user_email;
    // $item->user_tel = $data->user_tel;
    // $encrypted_password = password_hash($data->user_password, PASSWORD_DEFAULT);
    // $item->user_password = $encrypted_password;
    // $item->user_street = $data->user_street;
    // $item->user_city = $data->user_city;
    // $item->user_zipcode = $data->user_zipcode;
    // $item->user_profile = $data->user_profile;
    // $item->createUser();
?>