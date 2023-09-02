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

function validate_telephone(string $number)
{
    if (empty($number))
        throw new RequiredValidationException();
    if (!is_numeric($number))
        throw new ValidationException();
    if (strlen($number) > 9)
        throw new TooLongValidationException();
        if (strlen($number) < 9)
        throw new TooShortValidationException();
}

function validate_empty($value){
    if (empty($value))
        throw new RequiredValidationException();
    if ($value[0] == "Dirección no establecida")
        throw new RequiredValidationException();
}

function validate_string_contains_in_array($str, $opciones)
{
    if(!in_array($str, $opciones)){
        throw new RegExpValidationException();
    }
}

function validate_array_contains_in_array($arr, $opciones)
{
    foreach ($arr as $opcion) {
        if(!in_array($opcion, $opciones)){
            echo $opcion;
            throw new RegExpValidationException();
        }
    }
}