<?php
    require './classes/user/client.class.php';
    require './classes/database_handler.class.php';

    $database = new DatabaseHandler();
    $db = $database -> connectToDatabase();

    $item = new Client ($db);

    // Simulate get of a client:
    // $simulatedRequest = new stdClass();
    // $simulatedRequest -> userId = '4';
    // $data = $simulatedRequest;

    $data = json_decode(file_get_contents("php://input"));

    $item->userId = $data->userId;

    $result = $item->getClient();
    if (empty($result)) {
        echo 'Aucun utilisateur trouvé.';
    } else {
        echo json_encode($result);
    }
?>