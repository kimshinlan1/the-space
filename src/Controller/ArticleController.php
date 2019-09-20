<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function show()
    {
        $mang=['BMW','Toyota','Honda'];

        return $this->render('article/show.html.twig',['mang'=>$mang]);
    }
}