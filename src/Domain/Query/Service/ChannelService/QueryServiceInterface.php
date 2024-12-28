<?php

declare(strict_types=1);

namespace Consulting\Domain\Query\Service\ChannelService;

use Consulting\Domain\Query\Model\Query;
use Symfony\Component\HttpFoundation\Request;

interface QueryServiceInterface
{
    public function generateQuery(Request $httpRequest): Query; // Не уверена, что стоит реквест обрабатывать тут, но пока так
    public function saveQuery(Query $query): bool;

}
