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
            <input type="text" name="name" id="">
            <label for="">Apellido Paterno:</label>
            <input type="text" name="paterno" id="">
            <label for="">Apellido Materno:</label>
            <input type="text" name="materno" id="">
            <label for="">Genero:</label>
            <select name="genero" id="">
                <option value="">Femenino</option>
                <option value="">Masculino</option>
                <option value="">Prefiero no decirlo</option>
            </select>
            <label for="">Telefono</label>
            <input type="text" name="telefono" id="">
            <label for="">Correo:</label>
            <input type="email" name="email" id="">
            <label for="">Fecha de nacimiento</label>
            <input type="date" name="fnac" id="">
            <label for="">Nombre de usuario:</label>
            <input type="text" name="username" id="">
            <label for="">Dirección:</label>
            <input type="text" name="direccion" id="">
            <label for="">Contraseña:</label>
            <input type="password" name="contrasena" id="">

            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>
</html>