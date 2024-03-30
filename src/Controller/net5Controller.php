<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class net5Controller extends AbstractController
{

   #[Route('/net5', name: 'app_net5')]
    public function __invoke()
    {
        return $this->render('net5.html.twig');
    }
}
