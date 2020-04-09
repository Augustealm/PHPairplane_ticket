<?php

function input_date(){
    return date("Y-m-d");
}

$ticket = [
    "input_date" => input_date(),
    "price" => '',
    "baggage_weight" => ''
];

function makeTicketPrice($weight,$price) {
    if ($weight >= 20) {
        $price += 30;
    }

    return $price;
}

