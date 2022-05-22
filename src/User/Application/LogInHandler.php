<?php

declare(strict_types=1);

namespace SocialNews\User\Application;

use SocialNews\User\Domain\UserRepository;

final class LogInHandler
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(LogIn $command): void
    {
        // log in
    }
}
