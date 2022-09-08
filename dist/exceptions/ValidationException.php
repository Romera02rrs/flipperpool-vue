<?php
/**
 * Es la superclase de las validaciones y todas extienden de esta.
 * Devuelve "Error de validación" cuando es llamada.
 */

class ValidationException extends Exception
{
    public function __construct($message = "Error de validación", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}