<?php

declare(strict_types=1);

namespace SocialNews\User\Domain;

use DateTimeImmutable;
use Ramsey\Uuid\UuidInterface;
use Ramsey\Uuid\Uuid;

final class User
{
    private $id;
    private $nickname;
    private $passwordHash;
    private $creationDate;

    private function __construct(
        UuidInterface $id,
        string $nickname,
        string $passwordHash,
        DateTimeImmutable $creationDate
    ) {
        $this->id = $id;
        $this->nickname = $nickname;
        $this->passwordHash = $passwordHash;
        $this->creationDate = $creationDate;
    }
}
