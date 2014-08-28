<?php

namespace App\Bundle\CoreBundle\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;

/**
 * Vendor
 */
class Product extends BaseProduct
{
    /**
     * @var Vendor
     */
    private $vendor;

    /**
     * Get vendor
     *
     * @return integer
     */
    public function getVendor()
    {
        return $this->id;
    }

    /**
     * Set vendor
     *
     * @param Vendor $vendor
     */
    public function setVendor(Vendor $vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }
}
