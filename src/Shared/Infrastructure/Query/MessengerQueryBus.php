<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Query;

use App\Shared\Application\Query\Query;
use App\Shared\Application\Query\QueryBus;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;

final class MessengerQueryBus implements QueryBus
{
    use HandleTrait {
        handle as handleQuery;
    }

    public function __construct(MessageBusInterface $queryBus)
    {
        $this->messageBus = $queryBus;
    }

    public function ask(Query $query)
    {
        return $this->handleQuery($query);
    }
}
