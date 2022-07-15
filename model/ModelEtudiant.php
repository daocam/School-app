<?php
class ModelEtudiant extends CRUD {
    protected $table = 'etudiant';
    protected $primaryKey = 'id';
    protected $fillable = ['code', 'nom', 'prenom', 'sexe'];
}

?>