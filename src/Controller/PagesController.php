<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */

    public function home()
    {

        return $this->render('pages/home.html.twig');
    }

    /**
     * @Route("/pages/about", name="app_about")
     */

    public function about()
    {

        return $this->render('pages/About.html.twig');
    }
}
