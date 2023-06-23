<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Club Leones</title>

    <style>
        /* body{
            background-color: #e3f2f7
        } */

        .fila1{
            background-color: #02225a;
            border-left: 1px solid #02225a;
            border-right: 1px solid #02225a;
            color: #fff;
        }

        .fila2{
            border-bottom: 1px solid #02225a;
            border-left: 1px solid #02225a;
            border-right: 1px solid #02225a;
            box-sizing: border-box;
        }

.empresa{
    display: inline;
    float: right;
}

    </style>

</head>
<body class="body">
    <p class="empresa">Club Leones</p>
    <p class="empresa">Logo</p>
    <h1>Reporte perfil de jugadores</h1>
    <table class="table table-striped">
        <thead>
            <tr class="fila1">
                <th scope="col">idperfil</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Usuario</th>
                <th scope="col">Edad</th>
                <th scope="col">Nivel de flexibilidad</th>
                <th scope="col">Nivel de resistencia</th>
                <th scope="col">Nivel de fuerza</th>
                <th scope="col">id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perfil as $item)

            <tr class="fila2">
                <td>{{$item->id_perfil}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->usuario}}</td>
                <td>{{$item->edad}}</td>
                <td>{{$item->nivel_flexibilidad}}</td>
                <td>{{$item->nivel_resistencia}}</td>
                <td>{{$item->nivel_fuerza}}</td>
                <td>{{$item->id}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> --}}
</body>
</html>