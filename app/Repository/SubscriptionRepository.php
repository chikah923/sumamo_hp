<?php

namespace App\Repository;

use App\Model\Subscription;

class SubscriptionRepository
{
    public function saveSubscription($inputs, $flow)
    {
        return Subscription::createSubsctiption($inputs, $flow);
    }
}