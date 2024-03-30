<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class net8Controller extends AbstractController
{

   #[Route('/net8', name: 'app_net8')]
    public function __invoke()
    {
        return $this->render('net8.html.twig');
    }
}
