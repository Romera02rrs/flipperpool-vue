<?php
/**
 * Esta clase que extiende de "ValidationException" devuelve el mensaje "Error: campo requerido"
 */
class RequiredValidationException extends ValidationException
{
    public function __construct($message = "Error: el campo es requerido", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message,  $code, $previous);
    }
}