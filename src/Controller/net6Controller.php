<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class net6Controller extends AbstractController
{

   #[Route('/net6', name: 'app_net6')]
    public function __invoke()
    {
        return $this->render('net6.html.twig');
    }
}
