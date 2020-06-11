<?php

namespace PioneerBundle\Form;

use PioneerBundle\Entity\Enfant;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SuiviType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idE',EntityType::class,array('class'=>'PioneerBundle:Enfant','choice_label'=>function(Enfant $e){return $e->getNom() . ' ' .  $e->getPrenom() ;},'multiple'=>false,'label'=>'Enfants'))
            ->add('nutrition',ChoiceType::class,array('label'=>'Nutrition','choices'=>array('Malnutrition sevère'=>'Malnutrition sevère','Malnutrition faible'=>'Malnutrition faible','Nutrition normale'=>'Nutrition normale','Surpoids'=>'Surpoids','Obésité'=>'Obésité')))
            ->add('sommeil',ChoiceType::class,array('label'=>'Sommeil','choices'=>array('Pas de sieste'=>'Pas de sieste','Sommeil calme'=>'Sommeil calme','Sommeil agité'=>'Sommeil agité')))
            ->add('sociabilite',ChoiceType::class,array('label'=>'Sociabilité','choices'=>array('Introverti et réservé'=>'Introverti et réservé','Sociable et communicatif'=>'Sociable et communicatif')))
            ->add('psychologie')
            ->add( 'Submit',SubmitType::class);
    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PioneerBundle\Entity\Suivi'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pioneerbundle_suivi';
    }


}
