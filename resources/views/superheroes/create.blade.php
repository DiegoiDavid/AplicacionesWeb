<!DOCTYPE html>
<html>
<head>
    <title>Crear Superhéroe</title>
</head>
<body>

<h1>Crear Superhéroe</h1>

<form action="/superheroes" method="POST">
    @csrf

    <label>Nombre real:</label><br>
    <input type="text" name="real_name"><br><br>

    <label>Nombre de héroe:</label><br>
    <input type="text" name="hero_name"><br><br>

    <label>Foto (URL):</label><br>
    <input type="text" name="photo"><br><br>

    <label>Descripción:</label><br>
    <textarea name="description"></textarea><br><br>

    <button type="submit">Guardar</button>
</form>

<a href="/superheroes">Volver</a>

</body>
</html>