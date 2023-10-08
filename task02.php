<?php
header("Content-Type: application/json");

function name_utilisateur()
{
    if (isset($_GET["name"])) {
        $name = $_GET["name"];
        $response = array("name" => $name);
        echo json_encode($response);
    } else {
        $response = array("error" => "Name not provided");
        echo json_encode($response);
    }
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $email = $_GET["email"];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(200);
        echo json_encode(array('valid' => true, 'message' => 'Email is valid.'));
    } else {
        http_response_code(400);
        echo json_encode(array('valid' => false, 'message' => 'Invalid email address.'));
    }
} else {
    http_response_code(405);
    echo json_encode(array('valid' => false, 'message' => 'Method not allowed.'));
}


name_utilisateur();
