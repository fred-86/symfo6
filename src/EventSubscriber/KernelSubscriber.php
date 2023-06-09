<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class KernelSubscriber implements EventSubscriberInterface {
   
    public static function getSubscribedEvents(): array
    {
          // return the subscribed events, their methods and priorities
          return [
            RequestEvent::class => 'onKernelRequest' ];
    }
}