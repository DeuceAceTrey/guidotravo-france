<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class net91Controller extends AbstractController
{

   #[Route('/net91', name: 'app_net91')]
    public function __invoke()
    {
        return $this->render('net91.html.twig');
    }
}
