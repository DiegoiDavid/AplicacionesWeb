<!DOCTYPE html>
<html>
<head>
    <title>Superheroes</title>
</head>
<body>

<h1>Lista de Superhéroes</h1>

<a href="/superheroes/create">Crear nuevo</a>

<ul>
@foreach($heroes as $hero)
    <li>
        <a href="/superheroes/{{ $hero->id }}">
            {{ $hero->hero_name }}
        </a>
    </li>
@endforeach
</ul>

</body>
</html>