<?php
RequirePage::requireModel('CRUD');
RequirePage::requireModel('Cours');

class ControllerCours {
    public function index() {
        return Twig::render('cours-index.php');
    }

    public function list() {
        $cours = new ModelCours;
        $select = $cours->select();
        return Twig::render('cours-list.php', ['cours' => $select]);
    }

}

?>