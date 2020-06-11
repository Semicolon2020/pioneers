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

class EvaluationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idE',EntityType::class,array('class'=>'PioneerBundle:Enfant','choice_label'=>function(Enfant $e){return $e->getNom() . ' ' .  $e->getPrenom() ;},'multiple'=>false,'label'=>'Enfants'))
            ->add('idAc', EntityType::class,array('class'=>'PioneerBundle:Activite','choice_label'=>'nom','multiple'=>false,'label'=>'Activites'))
            ->add('Remarque',ChoiceType::class,array('label'=>'Remarques','choices'=>array('Passable'=>'Passable','Moyen'=>'Moyen','Bien'=>'Bien','Très Bien'=>'Très Bien')))
            ->add('Score')
            ->add( 'Submit',SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PioneerBundle\Entity\Evaluation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pioneerbundle_evaluation';
    }


}
