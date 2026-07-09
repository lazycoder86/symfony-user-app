<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/users/{id<\d+>}', name: 'user_show')]
    public function show(int $id, UserRepository $userRepository){

        $user = $userRepository->find($id);

        if(!$user) throw new \Exception('User not found');

        return $this->render('user/show.html.twig', ['user' => $user]);
    }

}
