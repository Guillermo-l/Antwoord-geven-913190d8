<?php

require_once "validateQuestion.php";

$time = date("h:i:s");

if (isset($_POST["user"])) {
    $user = $_POST["user"];
} else {
    $user = "Undefined";
}
if (isset($_POST["message"])) {
    $message = $_POST["message"];
} else {
    $message = "Error";
}


if (isset($_COOKIE["messageList"])) {
    $oldMessage = $_COOKIE["messageList"];
    $newMessage = $time . " - " . $user . ": " . $message . PHP_EOL;
    $questionResult = validateQuestion($message);    
    $messageList = $oldMessage . $newMessage . $questionResult;
} elseif (!isset($_COOKIE["messageList"])) {
    $messageList = $time . " - " . $user . ": " . $message . $questionResult .  PHP_EOL;
}

setcookie("messageList", $messageList);
header("location:chat.php");
