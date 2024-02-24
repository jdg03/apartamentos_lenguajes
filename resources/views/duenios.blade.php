<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dueños</title>
</head>
<body>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">IdDuenio</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($duenios as $duenio)

          <tr>
     
            <th scope="row">{{$duenio->idDuenio}}</th>
            <td>{{$duenio->nombre}}</td>
            <td>{{$duenio->apellido}}</td>
            <td>{{$duenio->correo}}</td>
          </tr>
          
              
          @endforeach  
        
          
        </tbody>
      </table>

      <a href="{{route('inicio')}}" class="btn btn-secondary">Regresar</a>
    
</body>
</html>