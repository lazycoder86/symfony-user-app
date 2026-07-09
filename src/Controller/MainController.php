<?php
namespace App\Controller;

use App\Model\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function homepage(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();
        $user = $userRepository->find(1);
        return $this->render('main/homepage.html.twig', compact('users', 'user'));
    }
}
