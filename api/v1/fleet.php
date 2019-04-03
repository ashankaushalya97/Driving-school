<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/4/19
 * Time: 1:35 AM
 */

header("Content-type: application/json");
$fleetService = new FLeetServiceImpl();
$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {
    case "GET":
        $id = $_GET["id"];
        if ($id === "all") {
            echo json_encode();
        } else {
            echo json_encode();
        }

        break;
}
