<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/",name="app_home_page")
     */
    public function show()
    {
        $comments=['I ate normal rock once. It did not taste like bacon!',
            "Woohoo! I'm going on an all-asteroid diet!",
            'i like bacon too! Bye some from my site'];

        return $this->render('article/show.html.twig',['comments'=>$comments]);
    }

    /**
     * @Route("/second",name="second_page")
     */
    public function second_page(){
        return  $this->render('article/second_page_html.twig');
    }
}