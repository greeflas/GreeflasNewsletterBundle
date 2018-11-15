<?php

namespace Greeflas\Bundle\NewsletterBundle\Controller;

use Greeflas\Bundle\NewsletterBundle\Dto\Subscriber;
use Greeflas\Bundle\NewsletterBundle\Service\NewsletterSubscriberInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class AjaxController extends AbstractController
{
    public function subscribe(Request $request, NewsletterSubscriberInterface $service)
    {
        $dto = new Subscriber($request->get('email', ''));
        $service->save($dto);

        return $this->json([
            'message' => 'success',
            'email' => $dto->getEmail(),
        ]);
    }
}
