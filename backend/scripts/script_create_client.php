<?php
    require './classes/database_handler.class.php';
    require './classes/user/client.class.php';

    $database = new DatabaseHandler();
    $db = $database -> connectToDatabase();

    $item = new Client ($db);

    // $simulatedRequest= new stdClass();
    // $simulatedRequest->username = "zer";
    // $simulatedRequest->firstname = "zerina";
    // $simulatedRequest->surname = "zed";
    // $simulatedRequest->email = "blabla@bla.com";
    // $simulatedRequest->tel = "0789647529";
    // $simulatedRequest->password = "456";
    // $simulatedRequest->street = "rue des vaillants";
    // $simulatedRequest->city = "thionville";
    // $simulatedRequest->zipcode = "54000";

    
    $data = json_decode(file_get_contents("php://input"));
    // $data = $simulatedRequest;

    $item->username = $data->username;
    $item->firstname = $data->firstname;
    $item->surname = $data->surname;
    $item->email = $data->email;
    $item->tel = $data->tel;
    $encrypted_password = password_hash($data->password, PASSWORD_DEFAULT);
    $item->password = $encrypted_password;
    $item->street = $data->street;
    $item->city = $data->city;
    $item->zipcode = $data->zipcode;
    $item->createUser();    
?>