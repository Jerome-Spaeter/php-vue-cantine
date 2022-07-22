<?php
    require './classes/database_handler.class.php';
    require './classes/child.class.php';

    $database = new DatabaseHandler();
    $db = $database -> connectToDatabase();

    $item = new Child ($db);

    // Simulate creation of a new child:
    // $simulatedRequest = new stdClass();

    // $simulatedRequest -> parentId = '3';
    // $simulatedRequest -> firstname = 'samy';
    // $simulatedRequest -> surname = 'shbib';
    // $simulatedRequest -> dob = '1989-06-08';
    // $simulatedRequest -> allergies = '';
    // $simulatedRequest -> board = '1';

    // $data = $simulatedRequest;


    $data = json_decode(file_get_contents("php://input"));

    $item->parentId = $data->parentId;
    $item->firstname = $data->firstname;
    $item->surname = $data->surname;
    $item->dob = $data->dob;
    $item->allergies = $data->allergies;
    $item->board = $data->board;
    $item->createChild();    
?>