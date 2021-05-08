<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <a href="{{url('companies/create')}}" class="btn btn-primary">Crear Nueva Empresa</a>
            <br><br>
            <br>
            <table class="table table-striped tablet-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>NIT</th>
                    <th>TELEFONO</th>
                    <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  @foreach($companies as $company)
                      <tr>
                          <td>{{$company->id}}</td>
                          <td>{{$company->name}}</td>
                          <td>{{$company->description}}</td>
                          <td>{{$company->nit}}</td>
                          <td>{{$company->phone}}</td>
                          <td>

                              <a href=""class="btn btn-info">Detalles</a>
                              <a href=""class="btn btn-warning">Editar</a>
                              <a href=""class="btn btn-danger">Eliminar</a>
                          </td>
                      </tr>
                </tr>
                @endforeach

                </tbody>
                </table>

            {{$companies->links()}}
        </div>
    </div>
</div>

</body>
</html>
