<?php

function val()
{
    $valErr = [];
    if (empty($_POST["flight_number"])) {
        $valErr["flight_number"] = "Nurodykite skrydžio numerį";
    }
    if (!preg_match('/^[3-6][0-9]{2}[0,1][0-9][0-9]{2}[0-9]{4}$/', $_POST["ID"])) {
        if (empty($_POST["ID"])) {
            $valErr["ID"] = "Įveskite asmens kodą";
        } else if (strlen($_POST["ID"]) < 11) {
            $valErr["ID"] = "Klaidingai įvestas asmens kodas";
        } else if (strlen($_POST["ID"]) > 11) {
            $valErr["ID"] = "Klaidingai įvestas asmens kodas";
        } else if (!preg_match('/^[3-6]/', $_POST["ID"])) {
            $valErr["ID"] = "Asmens kodas turi prasidėti skaitmenimis 3, 4, 5 arba 6";
        } else {
            $valErr["ID"] = "Klaidingai įvestas asmens kodas";
        }
    }
    if (!preg_match('/^[a-zA-Z ąĄčČęĘėĖįĮšŠųŲūŪžŽ]{1,100}$/u', $_POST["first_name"])) {
        if (empty($_POST["first_name"])) {
            $valErr["first_name"] = "Įveskite vardą";
        } else {
            $valErr["first_name"] = "Klaidingai įvestas keleivio vardas";
        }
    }
    if (!preg_match('/^[a-zA-Z ąĄčČęĘėĖįĮšŠųŲūŪžŽ]{1,100}$/u', $_POST["last_name"])) {
        if (empty($_POST["first_name"])) {
            $valErr["last_name"] = "Įveskite pavardę";
        } else {
            $valErr["last_name"] = "Klaidingai įvesta pavardė";
        }
    }
    if (!preg_match('/^[a-zA-Z ąĄčČęĘėĖįĮšŠųŲūŪžŽ]{1,50}$/u', $_POST["last_name"])) {
        if (empty($_POST["first_name"])) {
            $valErr["last_name"] = "Įveskite pavardę";
        } else {
            $valErr["last_name"] = "Klaidingai įvesta pavardė";
        }
    }
    if (empty($_POST["baggage_weight"])) {
        $valErr["baggage_weight"] = "Pasirinkite bagažo svorį";
    }
    if (!preg_match('/^[A-Za-zÀ-ȕ0-9(),-_., ]{50,1000}$/', $_POST["comm"])){
        if (empty($_POST["comm"])) {
            $valErr["comm"] = "Įrašykite komentarą (nuo 50 simbolių)";
        } else if (strlen($_POST["comm"]) < 50) {
            $valErr["comm"] = "Komentaras per trumpas";
        } else if (strlen($_POST["comm"]) > 1000) {
            $valErr["comm"] = "Komentaras per ilgas";
        }
    }
    return $valErr;
}