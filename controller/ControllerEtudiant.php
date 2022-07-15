<?php
RequirePage::requireModel('CRUD');
RequirePage::requireModel('Etudiant');
RequirePage::requireLibrary('Validation');

class ControllerEtudiant {
    public function index() {
        return Twig::render('etudiant-index.php');
    }

    /**
     * Affiche la liste des étudiant
     */
    public function list() {
        $etudiant = new ModelEtudiant;
        $select = $etudiant->select();
        return Twig::render('etudiant-list.php', ['etudiants' => $select]);
    }

    /**
     * Ajoute un étudiant
     */
    public function create() {
        return Twig::render('etudiant-insert.php');
    }

    /**
     * Enregistre un étudiant en validant les données de celui-ci 
     */
    public function store() {
        $validation = new Validation;
        extract($_POST);
        $validation->name('code')->value($code)->required()->max(12);
        $validation->name('prenom')->value($prenom)->pattern('alpha')->required()->max(45);
        $validation->name('nom')->value($nom)->pattern('alpha')->required()->max(45);
        $validation->name('sexe')->value($sexe)->pattern('alpha')->max(1);

        if ($validation->isSuccess()) {
            $etudiant = new ModelEtudiant;
            $insert = $etudiant->insert($_POST);
            RequirePage::redirect('etudiant/list');   
        } else {
            $errors =  $validation->displayErrors();
            return Twig::render('etudiant-insert.php', ['errors' => $errors, 'etudiant' => $_POST]);
        }
    }


    /**
     * Affiche le détail d'un étudiant
     */
    public function show($value) {
        $etudiant = new ModelEtudiant;
        $selectId = $etudiant->selectId($value);
        return Twig::render('etudiant-show.php', ['etudiant' => $selectId]);
    }


    /**
     * Affiche la page de modification des données d'un étudiant
     */
    public function edit($value){
        $etudiant = new ModelEtudiant;
        $selectId = $etudiant->selectId($value);
        return Twig::render('etudiant-edit.php', ['etudiant' => $selectId]);
    }

    /**
     * Mets à jour en validant les données d'un étudiant 
     */
    public function update() {
        $validation = new Validation;
        extract($_POST);
        $validation->name('code')->value($code)->required()->max(12);
        $validation->name('prenom')->value($prenom)->pattern('alpha')->required()->max(45);
        $validation->name('nom')->value($nom)->pattern('alpha')->required()->max(45);
        $validation->name('sexe')->value($sexe)->pattern('alpha')->max(1);
  
        if ($validation->isSuccess()) {
            $etudiant = new ModelEtudiant;
            $update = $etudiant->update($_POST);
            RequirePage::redirect('etudiant/list'); 
        } else {
            $errors =  $validation->displayErrors();
            return Twig::render('etudiant-edit.php', ['errors' => $errors, 'etudiant' => $_POST]);
        }
    }

    /**
     * Supprime un étudiant
     */
    public function delete() {
        $etudiant = new ModelEtudiant;
        $delete = $etudiant->delete($_POST);
        RequirePage::redirect('etudiant/list'); 
    }

}

?>