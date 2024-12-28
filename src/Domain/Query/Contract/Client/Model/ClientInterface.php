<?php

declare(strict_types=1);

namespace Consulting\Domain\Query\Contract\Client\Model;

interface ClientInterface
{
    public function getId(): int;
    public function getLevel(): int;
    public function getName(): string;
}
