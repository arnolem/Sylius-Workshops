<?php

namespace App\Bundle\CoreBundle\Entity;

use Sylius\Component\Core\Model\Order as BaseOrder;

class Order extends BaseOrder
{
    private $packagingType;

    public function getPackagingType()
    {
        return $this->packagingType;
    }

    public function setPackagingType(PackagingType $type)
    {
        $this->packagingType = $type;

        return $this;
    }
}
