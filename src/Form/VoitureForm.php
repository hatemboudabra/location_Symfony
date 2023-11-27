<?php

namespace App\Form;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;

class VoitureForm extends AbstractType{
    public function buildForm(FormBuilderInterface $builder,array $options):void{


        $builder->add('serie',TextType::class);
        $builder->add('date_mise_circulation',DateType::class);
        $builder->add('modele',TextType::class);
        $builder->add('prix_jour',TextType::class);

    }
    public function getName(){
        return "Voiture";
    }
}