<?php

declare(strict_types=1);

namespace Consulting\Domain\Client\Model;

use Consulting\Domain\Query\Contract\Client\Model\ClientInterface;

class Client implements ClientInterface
{
    private int $id;
    private string $name;
    private int $level; // Ключевитость

    public function __construct(
        int $id,
        string $name,
        int $level
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
