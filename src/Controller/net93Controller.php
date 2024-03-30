<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class net93Controller extends AbstractController
{

   #[Route('/net93', name: 'app_net93')]
    public function __invoke()
    {
        return $this->render('net93.html.twig');
    }
}
