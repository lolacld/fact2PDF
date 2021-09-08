<?php

$form = new Form();

$form->debutForm()
    ->ajoutLabelFor('titre', 'Titre de l\'annonce :')
    ->ajoutInput('text', 'titre', ['class' => 'form-control'])
    ->ajoutLabelFor('description', 'Description')
    ->ajoutTextarea('description', '', ['class' => 'form-control'])
    ->ajoutBouton('Valider', ['class' => 'btn btn-primary'])
;

print $form;