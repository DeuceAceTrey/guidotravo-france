<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class net95Controller extends AbstractController
{

   #[Route('/net95', name: 'app_net95')]
    public function __invoke()
    {
        return $this->render('net95.html.twig');
    }
}
