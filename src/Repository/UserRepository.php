<?php
namespace App\Repository;

use App\Model\User;
use Psr\Log\LoggerInterface;

class UserRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function findAll(): array
    {
        $this->logger->info('Fetching all users');
        return [
            new User(1, 'John Doe', 'john.doe@example.com', 'active'),
            new User(2, 'Jane Doe', 'jane.doe@example.com', 'inactive'),
        ];
    }

    public function find(int $id): ?User
    {
        $this->logger->info('Fetching user with id: '.$id);
        foreach($this->findAll() as $user){
            if($user->getId() === $id) return $user;
        };
        return null;
    }
}
