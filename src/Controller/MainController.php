<?php
namespace App\Controller;

use App\Model\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $user = new User();
        return $this->render('main/homepage.html.twig', compact('text'));
    }
}
