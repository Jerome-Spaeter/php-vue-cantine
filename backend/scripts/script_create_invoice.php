<?php
    require './classes/database_handler.class.php';
    require './classes/invoice.class.php';

    $database = new DatabaseHandler();
    $db = $database -> connectToDatabase();

    $item = new Invoice ($db);

    // Simulate creation of a new invoice:
    $simulatedRequest = new stdClass();

    $simulatedRequest -> childId = 2;
    $simulatedRequest -> amount = 45;
    
    // $data = json_decode(file_get_contents("php://input"));
    $data = $simulatedRequest;

    $item->childId = $data->childId;
    $item->amount = $data->amount;
    $item->createInvoice();    
?>