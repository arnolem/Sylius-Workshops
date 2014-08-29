<?php

namespace App\Bundle\WebBundle\EventListener;

use Sylius\Bundle\WebBundle\Event\MenuBuilderEvent;

class MenuBuilderListener
{
    public function addBackendMenuItems(MenuBuilderEvent $event)
    {
        $menu = $event->getMenu();

        $menu['assortment']
            ->addChild('vendors', array(
                'route'           => 'app_backend_vendor_index',
                'labelAttributes' => array('icon' => 'glyphicon glyphicon-stats'),
            ))
            ->setLabel('Vendors')
        ;
    }
}
