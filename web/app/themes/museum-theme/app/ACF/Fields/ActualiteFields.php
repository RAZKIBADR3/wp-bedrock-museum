<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

class ActualiteFields {
    public static function build() {
        $actualite = new FieldsBuilder('actualite_fields');
    
        $actualite
            ->addText('titre', [
                'label' => 'Titre'
            ])
            ->addText('desciption', [
                'label' => 'Desciption'
            ])
            ->addImage('image', [
                'label' => "Image d'actualité"
            ])
            ->setLocation('post_type', '==', 'actualite')
        ;

        return $actualite;
    }
}