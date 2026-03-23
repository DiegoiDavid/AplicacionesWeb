<!DOCTYPE html>
<html>
<head>
    <title>Editar</title>
</head>
<body>

<h1>Editar Superhéroe</h1>

<form action="/superheroes/{{ $hero->id }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre real:</label><br>
    <input type="text" name="real_name" value="{{ $hero->real_name }}"><br><br>

    <label>Nombre de héroe:</label><br>
    <input type="text" name="hero_name" value="{{ $hero->hero_name }}"><br><br>

    <label>Foto (URL):</label><br>
    <input type="text" name="photo" value="{{ $hero->photo }}"><br><br>

    <label>Descripción:</label><br>
    <textarea name="description">{{ $hero->description }}</textarea><br><br>

    <button type="submit">Actualizar</button>
</form>

<a href="/superheroes">Volver</a>

</body>
</html>