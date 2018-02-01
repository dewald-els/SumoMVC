<?php

/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2017/06/17
 * Time: 2:42 PM
 */

class NotFoundException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Display an Error.
     */
    public function print_error()
    {
        echo 'Error in file: <b>' . $this->getFile() . '</b> on line: '.$this->getLine();
        echo '<pre>' . $this->getMessage() . '</pre>';
        exit();
    }
}