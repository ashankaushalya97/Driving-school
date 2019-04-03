<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/4/19
 * Time: 1:28 AM
 */

header("Content-type: application/json");
$userService = new UserServiceImpl();
$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {
    case "POST":
        $username = $_POST["username"];
        $password = $_POST["password"];
        echo json_encode($userService->login($username,$password));
        break;
}