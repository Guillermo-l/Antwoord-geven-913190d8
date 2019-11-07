<?php

function validateQuestion($message)
{
    $message = strtolower($message);
    $question1 = "bereken voor mij ";
    $question2 = "wat is ";
    $question3 = "hoeveel is ";
    $question4 = "bereken het volgende ";
    $question5 = "calculate ";

    if (strpos($message, $question1) !== false || strpos($message, $question2) !== false || strpos($message, $question3) !== false || strpos($message, $question4) !== false || strpos($message, $question5) !== false) {
        $sum1 = str_replace($question1, "", $message);
        $sum2 = str_replace($question2, "", $sum1);
        $sum3 = str_replace($question3, "", $sum2);
        $sum4 = str_replace($question4, "", $sum3);
        $sum5 = str_replace($question5, "", $sum4);
        
        $explodedMessage = explode(" ", $sum5);
        var_dump($explodedMessage);
        if($explodedMessage[1] === "+"){
            $answer = $explodedMessage[0] + $explodedMessage[2];
        } elseif($explodedMessage[1] === "-") {
            $answer = $explodedMessage[0] - $explodedMessage[2];
        } elseif($explodedMessage[1] === "*") {
            $answer = $explodedMessage[0] * $explodedMessage[2];
        } elseif($explodedMessage[1] === "/") {
            $answer = $explodedMessage[0] / $explodedMessage[2];
        } else {
            $answer = "Geen geldige som!";
        }
        return date("h:i:s") . " Bot: Dank voor je vraag! " . PHP_EOL . date("h:i:s") . " Bot: het antwoord is: $answer";
    } else {
        return date("h:i:s") . " Bot: Geen geldige vraag!" . PHP_EOL;
    }
}


echo $outcome = validateQuestion($message);
