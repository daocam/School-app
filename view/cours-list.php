<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ path }}css/style.css">
    <title>Cours</title>
</head>
<body>
    <h1>Cours</h1>
    <table>
        <tr>
            <th>Sigle</th>
            <th>Titre</th>
        </tr>
        {% for cours in cours %}
        <tr>
            <td>{{ cours.sigle }}</td>
            <td>{{ cours.titre }}</td>
        </tr>
        {% endfor %}
    </table>

    <div class="btns-box">
        <a href='{{ path }}'>Accueil</a>
    </div>

</body>
</html>