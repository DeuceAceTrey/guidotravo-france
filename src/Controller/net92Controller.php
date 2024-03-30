<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class net92Controller extends AbstractController
{

   #[Route('/net92', name: 'app_net92')]
    public function __invoke()
    {
        return $this->render('net92.html.twig');
    }
}
