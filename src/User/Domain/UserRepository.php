<?php

declare(strict_types=1);

namespace SocialNews\User\Domain;

interface UserRepository
{
    public function add(User $user): void;
}