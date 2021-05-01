<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Crear Nuevo Usuario</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br>
            <div class="panel panel-primary">
                <div class="panel-heading">
                Formulario De Registro
                </div>
                <div class="panel body">
                    <form action="{{url('users')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="">Apellido</label>
                            <input type="text" class="form-control" name="lastname" id="lastname">
                        </div>
                        <div class="form-group">
                            <label for="">Correo Electornico</label>
                            <input type="text" class="form-control" name="email" id="emaiil">
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Guardar Nuevo Usuario</button>
                        <a href="{{url('users')}}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
