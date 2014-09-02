<?php

namespace App\Bundle\CoreBundle\Form;

use Sylius\Bundle\CoreBundle\Form\Type\Checkout\ShippingStepType as BaseShippingType;
use Symfony\Component\Form\FormBuilderInterface;

class ShippingStepType extends BaseShippingType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('packagingType', 'entity', array(
                'class' => 'App\Bundle\CoreBundle\Entity\PackagingType'
            ))
        ;
    }
}
