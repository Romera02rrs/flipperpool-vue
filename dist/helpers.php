<?php

require_once "exceptions/ValidationException.php";
require_once "exceptions/RequiredValidationException.php";
require_once "exceptions/TooShortValidationException.php";
require_once "exceptions/TooLongValidationException.php";
require_once "exceptions/RegExpValidationException.php";
require_once "exceptions/InvalidEmailValidationException.php";


function clean($data)
{
    $data = trim($data);
    return htmlspecialchars($data);
}

function validate_string(string $string, int $minLength = 1, int $maxLength = 5000)
{
    if (empty($string))
        throw new RequiredValidationException();
    if (strlen($string) < $minLength)
        throw new TooShortValidationException();
    if (strlen($string) > $maxLength)
        throw new TooLongValidationException();
}

function validate_email(string $string)
{
    if (empty($string))
        throw new RequiredValidationException();
    if (!filter_var($string, FILTER_VALIDATE_EMAIL))
        throw new InvalidEmailValidationException();
}

function validate_empty($value){
    if (empty($value))
        throw new RequiredValidationException();
    if ($value[0] == "Dirección no establecida")
        throw new RequiredValidationException();
}

function validate_array_contains($arr, $opciones)
{
    foreach ($arr as $opcion) {
        if(!in_array($opcion, $opciones)){
            echo $opcion;
            throw new RegExpValidationException();
        }
    }
}