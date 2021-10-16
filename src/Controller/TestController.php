<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function helloAction(): Response
    {
        $response = new Response('Hello World');

        return $response;
    }

    public function binaryFileAction(): Response
    {
        $response = new BinaryFileResponse(
            dirname(__DIR__, 2) . '/assets//test.txt'
        );
        $response->headers->set('Content-Type', 'text/plain');

        return $response;
    }
}
