<?php

declare(strict_types=1);

namespace Consulting\Domain\Query\Model;

use Consulting\Domain\Query\Contract\Client\Model\ClientInterface;
use DateTime;

class Query
{
    private int $id;
    private int $type;
    private DateTime $createdDate;
    private ClientInterface $client;
    private string $question;
    private string $answer;
    private int $channel;
    private ?int $priority;
    private ?Query $parentQuery;

}
