<?php
    require './classes/user/client.class.php';

    $database = new DatabaseHandler();
    $db = $database -> connectToDatabase();

    $item = new Client ($db);

    $simulatedRequest= new stdClass();
    $simulatedRequest->username = "zed";
    $simulatedRequest->firstname = "zm";
    $simulatedRequest->surname = "ze";
    $simulatedRequest->email = "blabla@bla.com";
    $simulatedRequest->tel = "0787469529";
    $simulatedRequest->password = "456";
    $simulatedRequest->street = "rue des petitscoeurs";
    $simulatedRequest->city = "thionville";
    $simulatedRequest->zipcode = "54300";

    
    // $data = json_decode(file_get_contents("php://input"));
    $data = $simulatedRequest;

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