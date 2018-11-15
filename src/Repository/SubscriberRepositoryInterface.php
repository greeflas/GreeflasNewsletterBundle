<?php

namespace Greeflas\Bundle\NewsletterBundle\Repository;

use Greeflas\Bundle\NewsletterBundle\Dto\Subscriber;

interface SubscriberRepositoryInterface
{
    public function save(Subscriber $subscriber);
}
