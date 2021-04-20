<html>
<head>
    <title>Галерея</title>
    <link rel="stylesheet" type="text/css" href="templates/style.css">
</head>
<body>
    <h1>{{ title }}</h1>
    <br>
    <div class="gallery">
        {% for img in images %}
        <a>
            <img width="200" src="img/{{ img }}">
        </a>
        {% endfor %}
    </div>

    <form method="post">
        <button type="submit" name="limit" value="18">Показать еще</button>
    </form>

</body>
</html>
