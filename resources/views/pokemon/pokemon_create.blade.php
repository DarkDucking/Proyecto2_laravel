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
    <a href="/pokemon">Ver Pokemons atrapados</a>
    <form action="/pokemon" method="POST">
    @csrf
    <label for="nombre">Nombre <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"></label>
        @error('nombre')
            <i>{{ $message }}</i>
        @enderror
    <br>
    <label for="tipo1">Tipo Primario</label>
        <select name="tipo1" id="tipo1">
            <option value="Bicho">Bicho</option>
            <option value="Dragon">Dragon</option>
            <option value="Electrico">Electrico</option>
            <option value="Hada">Hada</option>
            <option value="Lucha">Lucha</option>
            <option value="Fuego">Fuego</option>
            <option value="Volador">Volador</option>
            <option value="Fantasma">Fantasma</option>
            <option value="Planta">Planta</option>
            <option value="Normal">Normal</option>
            <option value="Tierra">Tierra</option>
            <option value="Hielo">Hielo</option>
            <option value="Roca">Roca</option>
            <option value="Acero">Acero</option>
            <option value="Agua">Agua</option>
            <option value="Psiquico">Psiquico</option>
            <option value="Siniestro">Siniestro</option>
            <option value="Veneno">Veneno</option>
        </select>
    <br>
    
    <label for="tipo2">Tipo Secundario</label>
        <select name="tipo2" id="tipo2">
            <option value="Bicho">Bicho</option>
            <option value="Dragon">Dragon</option>
            <option value="Electrico">Electrico</option>
            <option value="Hada">Hada</option>
            <option value="Lucha">Lucha</option>
            <option value="Fuego">Fuego</option>
            <option value="Volador">Volador</option>
            <option value="Fantasma">Fantasma</option>
            <option value="Planta">Planta</option>
            <option value="Normal">Normal</option>
            <option value="Tierra">Tierra</option>
            <option value="Hielo">Hielo</option>
            <option value="Roca">Roca</option>
            <option value="Acero">Acero</option>
            <option value="Agua">Agua</option>
            <option value="Psiquico">Psiquico</option>
            <option value="Siniestro">Siniestro</option>
            <option value="Veneno">Veneno</option>
            <option value="--------------">Sin Tipo</option>
        </select>
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