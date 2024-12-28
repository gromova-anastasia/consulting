<?php

declare(strict_types=1);

namespace Consulting\Domain\Query\Service\Factory;


use Consulting\Domain\Query\Service\ChannelService\ApiQueryService;
use Consulting\Domain\Query\Service\ChannelService\EmailQueryService;
use Consulting\Domain\Query\Service\ChannelService\PhoneQueryService;
use Consulting\Domain\Query\Service\ChannelService\QueryServiceInterface;

class QueryServiceFactory
{
    // TODO: generate enum for channel
    const EMAIL_CHANNEL = 'email';
    const API_CHANNEL = 'api';
    const PHONE_CHANNEL = 'phone';

    /**
     * @throws \Exception
     */
    public static function generateByChannel(string $ch): QueryServiceInterface
    {
        switch ($ch) {
            case self::EMAIL_CHANNEL :
                return new EmailQueryService();
            case self::API_CHANNEL:
                return new ApiQueryService();
            case self::PHONE_CHANNEL:
                return new PhoneQueryService();
            default:
                throw new \Exception(); // TODO: custom exception
        }
    }
}
