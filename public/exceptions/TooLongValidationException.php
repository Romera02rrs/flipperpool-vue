<?php
/**
 * Esta clase que extiende de "ValidationException" devuelve el mensaje "Error: el campo es demasiado largo"
 */
class TooLongValidationException extends ValidationException
{
    public function __construct($message = "Error: el campo es demasiado largo", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message,  $code, $previous);
    }
}