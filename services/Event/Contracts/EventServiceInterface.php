<?php

namespace app\services\Event\Contracts;

use app\models\forms\EventForm;

interface EventServiceInterface
{
    public function create(EventForm $model): bool;
}
