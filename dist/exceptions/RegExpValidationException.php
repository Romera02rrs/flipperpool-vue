<?php
/**
 * Esta clase que extiende de "ValidationException" devuelve el mensaje "Error: el patrón no es correcto"
 */
class RegExpValidationException extends ValidationException
{
    public function __construct($message = "Error: el patrón no es correcto", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message,  $code, $previous);
    }
}