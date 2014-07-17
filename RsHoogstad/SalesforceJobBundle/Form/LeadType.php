<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 6/21/14
 * Time: 7:41 PM
 */

namespace RsHoogstad\SalesforceJobBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;


class LeadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $validationOptions = [];/*array(
            'constraints' => array(
                new NotBlank(),
                new Length(array('min' => 3)),
            ));*/
        $builder
            ->add('firstName', 'text', $validationOptions)
            ->add('lastName', 'text', $validationOptions)
            ->add('email', 'email', $validationOptions)
            ->add('company', 'text', $validationOptions)
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'task';
    }
} 