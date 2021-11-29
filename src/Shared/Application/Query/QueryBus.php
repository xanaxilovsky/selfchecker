<?php

declare(strict_types=1);

namespace App\Shared\Application\Query;

interface QueryBus
{
    public function ask(Query $query);
}
