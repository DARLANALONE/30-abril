<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>listado De Usuario Registrados</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br><br>
            <a href="{{url('users/create')}}" class="btn btn-primary">Crear Nuevo Usuario</a>
            <br><br>
            @if(session('status'))
             <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
            <table class="table table-strped tablet-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CORREO ELECTRONICO</th>
                    <th>OPCIONES</th>

                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form action="{{url('users', $user->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a href="{{url('users',$user->id)}}" class="btn btn-info btn-sm">Detalles</a>
                            <a href="{{url('users/edit', $user->id)}}" class="btn btn-warning btn-sm">Editar</a>
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>

            {{$users->links()}}
        </div>
    </div>
</div>

</body>
</html>
