<?php

namespace App\Bundle\CoreBundle\Form;

use Sylius\Bundle\CoreBundle\Form\Type\ProductType as BaseProductType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductType extends BaseProductType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('vendor', 'entity', array(
                'class' => 'App\Bundle\CoreBundle\Entity\Vendor'
            ))
        ;
    }
}
