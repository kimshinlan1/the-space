<?php


namespace App\Controller;




use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index()
    {
        /**
         * @Route("/")
         */
        return new Response("Hello I'm Du");
    }
}