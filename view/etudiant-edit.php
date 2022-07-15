<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ path }}css/style.css">
    <title>Modifier etudiant</title>
</head>
<body>
    <h1>Modifier les informations de l'étudiant</h1>
    {% if errors is defined %}
        <span class="error">{{ errors|raw }}</span>
    {% endif %}
    <form class="add" action="{{ path }}etudiant/update" method="post">
        <input type="hidden" name="id" value="{{ etudiant.id }}">
        <div class="form-item">
            <label> Code permanent</label>
            <input type="text" name="code" value="{{ etudiant.code }}">
        </div>
        <div class="form-item">
            <label> Nom</label>
            <input type="text" name="nom" value="{{ etudiant.nom }}">
        </div>
        <div class="form-item">
            <label> Prénom</label>
            <input type="text" name="prenom" value="{{ etudiant.prenom }}">
        </div>
        <div class="form-item">
            <label> Sexe</label>
            <input type="text" name="sexe" value="{{ etudiant.sexe }}">
        </div>
        
        <input class="btn-sub" type="submit" value="Soumettre">
    </form>
    <form action="{{ path }}etudiant/delete" method="post">
        <input type="hidden" name="id" value="{{ etudiant.id }}">
        <input class="btn-sub" type="submit" value="Effacer">
    </form>

    <div class="btns-box">
        <a href='{{ path }}'>Accueil</a>
        <a href='{{ path }}etudiant/list'>Liste des étudiants</a>
    </div>
</body>
</html>