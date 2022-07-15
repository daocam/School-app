<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiant</title>
    <link rel="stylesheet" href="{{ path }}css/style.css">
</head>
<body>
    <h2>Détail sur l'étudiant</h2>
    <div class="add">
        <p><strong>Code permanent : </strong>{{ etudiant.code }}</p>
        <p><strong>Prenom : </strong>{{ etudiant.prenom }}</p>
        <p><strong>Nom : </strong>{{ etudiant.nom }}</p>
        <p><strong>Sexe : </strong>{{ etudiant.sexe }}</p>
    </div>
   
    <ul class="btns-box">
        <a href="{{ path }}etudiant/edit/{{etudiant.id}}">Modifier</a>
    </ul>
</body>
</html>