<?php

namespace App\Bundle\CoreBundle\Shipping\Calculator;

use Sylius\Component\Shipping\Calculator\Calculator;
use Sylius\Component\Shipping\Model\ShippingSubjectInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExternalApiCalculator extends Calculator
{
    public function calculate(ShippingSubjectInterface $subject, array $configuration)
    {
        // Call some external api here.
        return rand(100, 200);
    }

    /**
     * {@inheritdoc}
     */
    public function isConfigurable()
    {
        return false;
    }
}
