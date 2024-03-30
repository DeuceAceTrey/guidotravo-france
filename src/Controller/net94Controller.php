<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class net94Controller extends AbstractController
{

   #[Route('/net94', name: 'app_net94')]
    public function __invoke()
    {
        return $this->render('net94.html.twig');
    }
}
