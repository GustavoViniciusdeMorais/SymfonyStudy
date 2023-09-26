<?php

namespace App\EventSubscriber;

use App\Controller\TokenAuthController;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\KernelEvents;

class TokenSubscriber implements EventSubscriberInterface
{
    public $tokens;

    public function __construct()
    {
        $this->tokens = [
            'user1' => 'token1'
        ];
    }

    public function beforeController(ControllerEvent $event)
    {
        $controller = $event->getController();

        if (
            is_array($controller)
            && isset($controller[0])
            && $controller[0] instanceof TokenAuthController
        ) {
            $token = $event->getRequest()->query->get('token');
            if (!in_array($token, $this->tokens)) {
                throw new AccessDeniedHttpException('Wrong token!');
            }
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'beforeController'
        ];
    }
}
