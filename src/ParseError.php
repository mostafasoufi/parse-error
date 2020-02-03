<?php

namespace ParseError;

class ParseError
{
    /**
     * @var Code
     */
    private $code;

    /**
     * @var Message
     */
    private $message;

    /**
     * ParseError constructor.
     * @param $code
     * @param $message
     */
    public function __construct($code, $message)
    {
        $this->code = $code;
        $this->message = $message;
    }

    /**
     * Get code method.
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /** Get message method.
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}