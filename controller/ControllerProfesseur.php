<?php
RequirePage::requireModel('CRUD');
RequirePage::requireModel('Professeur');

class ControllerProfesseur {
    public function index() {
        return Twig::render('professeur-index.php');
    }

    public function list() {
        $professeur = new ModelProfesseur;
        $select = $professeur->select();
        return Twig::render('professeur-list.php', ['professeurs' => $select]);
    }
}









?>