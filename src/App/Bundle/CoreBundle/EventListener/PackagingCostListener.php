<?php

namespace App\Bundle\CoreBundle\EventListener;

use Sylius\Component\Order\Model\Adjustment;
use Symfony\Component\EventDispatcher\GenericEvent;

class PackagingCostListener
{
    public function applyPackagingCharges(GenericEvent $event)
    {
        $order = $event->getSubject();

        foreach ($order->getAdjustments() as $adjustment) {
            if ('packaging' === $adjustment->getLabel()) {
                $order->removeAdjustment($adjustment);
            }
        }

        $packagingType = $order->getPackagingType();
        $adjustment = new Adjustment();

        $adjustment
            ->setLabel('packaging')
            ->setAmount($packagingType->getPrice())
            ->setDescription($packagingType->getName())
        ;

        $order->addAdjustment($adjustment);
    }
}
