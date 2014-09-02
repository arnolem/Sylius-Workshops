<?php

namespace App\Bundle\CoreBundle\Form;

use Sylius\Bundle\CoreBundle\Form\Type\CartType as BaseCartType;
use Symfony\Component\Form\FormBuilderInterface;

class CartType extends BaseCartType
{
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
