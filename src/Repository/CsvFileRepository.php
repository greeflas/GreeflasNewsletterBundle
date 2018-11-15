<?php

namespace Greeflas\Bundle\NewsletterBundle\Repository;

use Greeflas\Bundle\NewsletterBundle\Dto\Subscriber;

final class CsvFileRepository implements SubscriberRepositoryInterface
{
    private $path;

    public function __construct(string $path)
    {
        if (!\file_exists($path)) {
            \touch($path);
        }

        $this->path = $path;
    }

    public function save(Subscriber $subscriber)
    {
        $file = new \SplFileObject($this->path, 'a+');
        $file->fputcsv(['email' => $subscriber->getEmail()]);
    }
}
