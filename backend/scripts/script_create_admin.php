<?php
    require './classes/user/admin.class.php';

    $database = new DatabaseHandler();
    $db = $database -> connectToDatabase();

    $item = new Admin ($db);

    // $simulatedRequest= new stdClass();
    // $simulatedRequest->username = "zer";
    // $simulatedRequest->firstname = "zerina";
    // $simulatedRequest->surname = "zed";
    // $simulatedRequest->email = "blabla@bla.com";
    // $simulatedRequest->password = "456";
    
    $data = json_decode(file_get_contents("php://input"));
    // $data = $simulatedRequest;

    $item->username = $data->username;
    $item->firstname = $data->firstname;
    $item->surname = $data->surname;
    $item->email = $data->email;
    $encrypted_password = password_hash($data->password, PASSWORD_DEFAULT);
    $item->password = $encrypted_password;
    $item->createAdmin();    
?>