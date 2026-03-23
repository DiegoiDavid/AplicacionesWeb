<!DOCTYPE html>
<html>
<head>
    <title>Detalle</title>
</head>
<body>

<h1>{{ $hero->hero_name }}</h1>

<p><strong>Nombre real:</strong> {{ $hero->real_name }}</p>

<img src="{{ $hero->photo }}" width="200">

<p><strong>Descripción:</strong> {{ $hero->description }}</p>

<br>

<a href="/superheroes/{{ $hero->id }}/edit">Editar</a>

<form action="/superheroes/{{ $hero->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>

<a href="/superheroes">Volver</a>

</body>
</html>