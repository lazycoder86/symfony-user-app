<?php

namespace App\Controller;
use App\Model\User;
use App\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/users')]
class UserAPIController extends AbstractController
{

    #[Route('', methods:['GET'])]
    public function getCollection(UserRepository $userRepository): \Symfony\Component\HttpFoundation\JsonResponse
    {

        $users = $userRepository->findAll();
        return $this->json($users);

    }
    #[Route('/{id<\d+>}', methods:['GET'])]
   public function get(int $id, UserRepository $userRepository){

        $user = $userRepository->find($id);

        if(!$user) throw $this->createNotFoundException("User not found");

        return $this->json($user);
   }
}
