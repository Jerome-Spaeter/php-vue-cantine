<?php
    require './classes/database_handler.class.php';
    require './classes/user/client.class.php';

    $database = new DatabaseHandler();
    $db = $database -> connectToDatabase();

    $item = new Client ($db);

    $simulatedRequest= new stdClass();
    $simulatedRequest->username = "jerome";
    $simulatedRequest->email = "blabla@tiendCA.com";
    $simulatedRequest->tel = "01256465863";
    $simulatedRequest->password = "123";
    $simulatedRequest->street = "rue hancock";
    $simulatedRequest->city = "china";
    $simulatedRequest->zipcode = "786200";

    
    // $data = json_decode(file_get_contents("php://input"));
    $data = $simulatedRequest;

    $item->username = $data->username;
    $item->email = $data->email;
    $item->tel = $data->tel;
    $encrypted_password = password_hash($data->password, PASSWORD_DEFAULT);
    $item->password = $encrypted_password;
    $item->street = $data->street;
    $item->city = $data->city;
    $item->zipcode = $data->zipcode;
    $item->createUser();    
?>