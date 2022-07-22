<?php
    require './classes/database_handler.class.php';
    require './classes/child.class.php';

    $database = new DatabaseHandler();
    $db = $database -> connectToDatabase();

    $item = new Child ($db);

    // Simulate get of a child:
    // $simulatedRequest = new stdClass();
    // $simulatedRequest -> clientId = '4';
    // $data = $simulatedRequest;

    $data = json_decode(file_get_contents("php://input"));

    $item->clientId = $data->clientId;

    $result = $item->getChildren();
    if (empty($result)) {
        echo 'Aucun enfant a été trouvé pour cet utilisateur';
    } else {
        echo json_encode($result);
    }
?>