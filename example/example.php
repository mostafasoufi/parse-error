<?php
include "../vendor/autoload.php";

use ParseError\ParseError;

$status = 400;

switch ($status) {
    case 300:
        $responseCode = new ParseError(300, 'Multiple Choice');
        break;

    case 400:
        $responseCode = new ParseError(400, 'Bad Request');
        break;

    case 500:
        $responseCode = new ParseError(500, 'Internal Server Error');
        break;

    default:
        $responseCode = false;
        break;
}

if ($responseCode instanceof ParseError) {
    echo $responseCode->getCode() . ' ' . $responseCode->getMessage();
}