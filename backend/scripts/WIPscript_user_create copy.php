<?php
    function redirect($url) { 
        // active la mise en mémoire tampon d'entrée
        ob_start(); 
        header('Location: '.$url);
        // désactive la mise en mémoire tampon de sortie
        ob_end_flush();
        //arrête le reste du code de la page si la redirection est ignorée. La façon de le faire est d’ajouter die() ou exit() après votre redirection 
        die(); 
    }
    $database = new DB();
    $db = $database -> connectToDatabase();

    $item = new User ($db);

    $data = json_decode(file_get_contents("php://input"));

    $item->user_username = $data->user_username;
    $item->user_email = $data->user_email;
    $item->user_tel = $data->user_tel;
    $encrypted_password = password_hash($data->user_password, PASSWORD_DEFAULT);
    $item->user_password = $encrypted_password;
    $item->user_street = $data->user_street;
    $item->user_city = $data->user_city;
    $item->user_zipcode = $data->user_zipcode;
    $item->user_profile_type = $data->user_profile_type;
    $item->createUser();    
?>