<?php

namespace Tipddy\UPVBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class InscripcionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('apellidos')
            ->add('rut')
            ->add('fechaNacimiento')
            ->add('sexo')
            ->add('emailPersonal')
            ->add('emailIntitucional')
            ->add('fonoFijo')
            ->add('fonoMovil')
            ->add('sede')
            ->add('facultad')
            ->add('carrera')
            ->add('tituloProfesional')
            ->add('gradoAcademico')
        ;
    }

    public function getName()
    {
        return 'tipddy_upvbundle_inscripciontype';
    }
}
