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

name_utilisateur();
