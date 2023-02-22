<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-gral">
        <form action="{{route('customer.authenticate')}}" method="POST">
            @csrf
            <h1>Sing up  </h1>
            <label for="">Nombre:</label>
            <input type="text" name="name" id="" value="{{old('name')}}">
            @error('name')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror
            <label for="">Apellido Paterno:</label>
            <input type="text" name="paterno" id="" value="{{old('paterno')}}">
            @error('paterno')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror
            <label for="">Apellido Materno:</label>
            <input type="text" name="materno" id="" value="{{old('materno')}}">
            @error('materno')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror
            <label for="">Genero:</label>
            <select name="genero" id="">
                <option value="">Femenino</option>
                <option value="">Masculino</option>
                <option value="">Prefiero no decirlo</option>
            </select>
            <label for="">Telefono</label>
            <input type="text" name="telefono" id="" value="{{old('telefono')}}">
            <label for="">Correo:</label>
            <input type="email" name="email" id="" value="{{old('email')}}">
            <label for="">Fecha de nacimiento</label>
            <input type="date" name="fnac" id="" value="{{old('fnac')}}">
            <label for="">Nombre de usuario:</label>
            <input type="text" name="username" id="" value="{{old('username')}}">
            @error('username')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror
            <label for="">Dirección:</label>
            <input type="text" name="direccion" id="" value="{{old('direccion')}}">
            <label for="">Contraseña:</label>
            <input type="password" name="contrasena" id="">
            @error('password')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror

            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>
</html>