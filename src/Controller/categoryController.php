<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class categoryController extends AbstractController
{

   #[Route('/category', name: 'category')]
    public function __invoke()
    {
        return $this->render('category.html.twig');
    }
}
