<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Editar Nuevo Usuario</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Formulario De Actualizacion
                </div>
                <div class="panel body">
                    <form action="{{url('users',$user->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Apellido</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" value="{{$user->lastname}}">
                        </div>
                        <div class="form-group">
                            <label for="">Correo Electornico</label>
                            <input type="text" class="form-control" name="email" id="emaiil" value="{{$user->email}}">
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Guardar Cambios</button>
                        <a href="{{url('users')}}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
