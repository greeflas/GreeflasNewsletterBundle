<?php

namespace Greeflas\Bundle\NewsletterBundle\Service;

use Greeflas\Bundle\NewsletterBundle\Dto\Subscriber;
use Greeflas\Bundle\NewsletterBundle\Repository\SubscriberRepositoryInterface;

final class NewsletterSubscriber implements NewsletterSubscriberInterface
{
    private $repository;

    public function __construct(SubscriberRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function save(Subscriber $subscriber): void
    {
        $this->repository->save($subscriber);
    }
}
