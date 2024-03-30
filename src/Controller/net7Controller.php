<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class net7Controller extends AbstractController
{

   #[Route('/net7', name: 'app_net7')]
    public function __invoke()
    {
        return $this->render('net7.html.twig');
    }
}
