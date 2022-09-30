<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Pokemon atrapados</h1>

    <a href="/pokemon/create">Registrar Nuevo Pokemon</a>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Numero en la pokedex</th>
            <th>Tipo primario</th>
            <th>Tipo secundario</th>
            <th>Ver Detalles</th>
        </tr>
        @foreach ($pokemons as $pokemon)
        <tr>
        
            <td>{{ $pokemon->nombre }}</td>
            <td>{{ $pokemon->numero }}</td>
            <td>{{ $pokemon->tipo1 }}</td>
            <td>{{ $pokemon->tipo2 }}</td>
            <td>
                <a href="/pokemon/{{ $pokemon->id }}">
                Ver detalles 
                </a>
            </td>
        
        </tr>
        @endforeach
    </table>
</body>
</html>