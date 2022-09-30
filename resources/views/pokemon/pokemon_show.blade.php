<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Pokemon</title>
</head>
<body>
    <h1>Datos de {{ $pokemon->nombre }}</h1>
    <h2>Numero en la pokedex: {{ $pokemon->numero }} </h2>
    <h2>Tipo primario {{ $pokemon->tipo1 }} </h2>
    <h2>Tipo secundario {{ $pokemon->tipo2 }} </h2>
    <h2>Grupo Huevo {{ $pokemon->grupo_huevo }} </h2>
    <a><img src= {{ $pokemon->img }}></a>
    

    
</body>
</html>