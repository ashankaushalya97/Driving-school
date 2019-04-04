<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/4/19
 * Time: 1:35 AM
 */

header("Content-type: application/json");
$fleetService = new FLeetServiceImpl();
$imageService = new ImageServiceImpl();
$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {
    case "GET":
        $id = $_GET["id"];
        if ($id === "all") {
            echo json_encode($fleetService->findAll());
        } else {
            echo json_encode($fleetService->findOne($id));
        }

        break;
    case "POST":
        $registerNumber = $_POST["registerNumber"];
        $vehicleType = $_POST["vehicleType"];
        $yom= $_POST["yom"];
        $imagePath = $imageService->uploadImage($_FILES["imageFleet"]);

        json_encode($fleetService->saveFleet($registerNumber,$registerNumber,$registerNumber,$yom,date("Y-m-d H:i:s"),null,null,$imagePath))
}
