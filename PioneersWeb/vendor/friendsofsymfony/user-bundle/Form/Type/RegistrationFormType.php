<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationFormType extends AbstractType
{
    /**
     * @var string
     */
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cin',TextType::class,array(
                'attr' => array(
                    'placeholder' => 'Cin...','maxlength' => 255
                )))
            ->add('nom',TextType::class,array('attr' => array('placeholder' => 'Nom...')))
            ->add('prenom',TextType::class,array('attr' => array('placeholder' => 'Prenom...')))
            ->add('numTel',TextType::class,array('attr' => array('placeholder' => 'Numero...')))
            ->add('roles', ChoiceType::class, array(
                'choices' => array('Parent' => 'P',
                                    'Admin' => 'R',
                                    'Tutor' => 'T'),
                'required' => true, 'multiple' => true,))

            ->add('etatCivil',TextType::class,array('attr' => array('placeholder' => 'Etat civil...')))
            ->add('email', EmailType::class, array('attr'=>array('placeholder'=>'E-mail...'),'label' => 'email', 'translation_domain' => 'FOSUserBundle'))
            ->add('username', null, array('attr'=>array('placeholder'=>'Username...'),'label' => 'Username', 'translation_domain' => 'FOSUserBundle'))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'options' => array(
                    'translation_domain' => 'FOSUserBundle',
                    'attr' => array(
                        'autocomplete' => 'new-password',
                    ),
                ),
                'first_options' => array('attr'=>array('placeholder'=>'Password...')),
                'second_options' => array('attr'=>array('placeholder'=>'Repeat password...')),
                'invalid_message' => 'password mismatch',
            ))
            ->add('photo', FileType::class, array('data_class'=>null, 'required'=>false))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'csrf_token_id' => 'registration',
        ));
    }

    // BC for SF < 3.0

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fos_user_registration';
    }
}
