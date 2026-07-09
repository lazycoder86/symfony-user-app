<?php

namespace App\Model;

class User
{
    public function __construct(
        private int    $id,
        private string $name,
        private string $email,
        private UserStatusEnum $status
    )
    {

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }


    /**
     * @return UserStatusEnum
     */
    public function getStatus(): UserStatusEnum
    {
        return $this->status;
    }

    public function getStatusString(): string
    {
        return $this->status->value;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
