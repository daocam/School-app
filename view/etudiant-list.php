<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ path }}css/style.css">
    <title>Etudiant</title>
</head>
<body>
    <h1>Etudiants</h1>
    <table>
        <tr>
            <th>Code permanent</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Sexe</th>
        </tr>
        {% for etudiant in etudiants %}
        <tr>
            <td>{{ etudiant.code }}</td>
            <td>{{ etudiant.prenom }}</td>
            <td>{{ etudiant.nom }}</td>
            <td>{{ etudiant.sexe }}</td>
            <td><a class="mod" href="{{ path }}etudiant/show/{{ etudiant.id }}">Afficher</a></td>
        </tr>
        {% endfor %}
    </table>

    <ul class="btns-box">
        <li><a href='{{ path }}'>Accueil</a></li>
        <li><a href='{{ path }}etudiant/create'>Ajouter un étudiant</a></li>
    </ul>

</body>
</html>