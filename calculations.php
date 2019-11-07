<?php

$message = "5 + 5 ?";


function calculations($message) {
    $explodedMessage = explode(" ", $message);
    if($explodedMessage[1] === "+"){
        $answer = $explodedMessage[0] + $explodedMessage[2];
        return $answer;
    } elseif($explodedMessage[1] === "-") {
        $answer = $explodedMessage[0] - $explodedMessage[2];
        return $answer;
    } elseif($explodedMessage[1] === "*") {
        $answer = $explodedMessage[0] * $explodedMessage[2];
        return $answer;
    } elseif($explodedMessage[1] === "/") {
        $answer = $explodedMessage[0] / $explodedMessage[2];
        return $answer;
    } else {
        return "Geen geldige input!";
    }

}

echo calculations($message);

?>