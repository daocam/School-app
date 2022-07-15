<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ path }}css/style.css">
    <title>Professeur</title>
</head>
<body>
    <h1>Professeurs</h1>
    <table>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
        </tr>
        {% for professeur in professeurs %}
        <tr>
            <td>{{ professeur.prenom }}</td>
            <td>{{ professeur.nom }}</td>
        </tr>
        {% endfor %}
    </table>

    <div class="btns-box">
        <a href='{{ path }}'>Accueil</a>
    </div>

</body>
</html>