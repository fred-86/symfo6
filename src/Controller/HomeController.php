<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home',methods:['GET'])]
    public function index(
        RecipeRepository $recipeRepository
    ): Response {
        return $this->render('home/index.html.twig', [
            'recipes' => $recipeRepository->findPublicRecipe(3)
        ]);
    }

}
