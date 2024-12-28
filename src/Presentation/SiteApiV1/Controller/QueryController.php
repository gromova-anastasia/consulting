<?php
declare(strict_types=1);

namespace Consulting\Presentation\SiteApiV1\Controller;

use Consulting\Domain\Query\Service\Factory\QueryServiceFactory;
use Exception;
use Symfony\Component\HttpFoundation\Request;

class QueryController
{
    public function get(Request $httpRequest)
    {
        // TODO : get exists query from db
    }

    public function create(Request $httpRequest)
    {
        $queryService = QueryServiceFactory::generateByChannel($httpRequest->get('channel'));
        try {
            $query = $queryService->generateQuery($httpRequest);
            $queryService->saveQuery($query);
        } catch (Exception $exception) {
            //generate custom exception;
        }

        return new Request();
    }

}