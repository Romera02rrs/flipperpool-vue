<?php
/**
 * Esta clase que extiende de "ValidationException" devuelve el mensaje "Error: email inválido"
 */
class InvalidEmailValidationException extends ValidationException
{
    public function __construct($message = "Error: email inválido", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message,  $code, $previous);
    }
}