<?php

namespace App\ACF\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

class AgendaFields {
    public static function register() {
        $agenda = new FieldsBuilder('agenda_fields');
    
        $agenda
            ->setLocation('post_type', '==', 'agenda')

            ->addDatePicker('date_debut', [
                'label' => 'Date Debut'
            ])
            ->addDatePicker('date_fin', [
                'label' => 'Date Fin'
            ])
            ->addTextarea('description', [
                'label' => 'Description'
            ])
            ->addDatePicker('prochaine_date', [
                'label' => 'Prochaine date'
            ])
            ->addText('lieu', [
                'label' => 'Lieu'
            ])
            ->addText('nom_musee', [
                'label' => 'Nom du musée'
            ])
            ->addImage('image', [
                'label' => "Image d'evenement"
            ])
        ;

        acf_add_local_field_group($agenda->build());
    }
}