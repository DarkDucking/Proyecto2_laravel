<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Pokemon</title>
</head>
<body>
    <h1>Registra un nuevo pokemon</h1>
    <form action="/pokemon" method="POST">
    @csrf
    <label for="nombre">Nombre <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"></label>
        @error('nombre')
            <i>{{ $message }}</i>
        @enderror
    <br>
    <label for="tipo1">Tipo primario <input type="text" name="tipo1" id="tipo1" value="{{ old('tipo1') }}"></label>
        @error('tipo1')
            <i>{{ $message }}</i>
        @enderror
    <br>
    <label for="tipo2">Tipo secundario <input type="text" name="tipo2" id="tipo2" value="{{ old('tipo2') }}"></label>
        @error('tipo2')
            <i>{{ $message }}</i>
        @enderror
    <br>
    <label for="grupo_huevo">Grupo huevo <input type="text" name="grupo_huevo" id="grupo_huevo" value="{{ old('grupo_huevo') }}"></label>
        @error('grupo_huevo')
            <i>{{ $message }}</i>
        @enderror
    <br>
    <label for="numero">Numero en la pokedex nacional <input type="number" name="numero" id="numero" value="{{ old('numero') }}"></label>
        @error('numero')
            <i>{{ $message }}</i>
        @enderror
    <br>
    <label for="img">URL de la imagen <input type="text" name="img" id="img" value="{{ old('img') }}"></label>
        @error('img')
            <i>{{ $message }}</i>
        @enderror
    <br>
    <button type="submit">Enviar</button>
    </form>
</body>
</html>