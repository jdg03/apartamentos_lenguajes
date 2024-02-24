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
            <th scope="col">IPropiedad</th>
            <th scope="col">Piso</th>
            <th scope="col">Area</th>
            <th scope="col">Color</th>
            <th scope="col">idDuenio</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($propiedades as $propiedad)

          <tr>
     
            <th scope="row">{{$propiedad->idPrpiedad}}</th>

            <td>{{$propiedad->piso}}</td>
            <td>{{$propiedad->area}}</td>
            <td>{{$propiedad->color}}</td>
            <td>{{$propiedad->idDuenio}}</td>
            <td>{{$propiedad->estado}}</td>
            
          </tr>
          
              
          @endforeach  
        
          
        </tbody>
      </table>

      <a href="{{route('inicio')}}" class="btn btn-secondary">Regresar</a>
    
</body>
</html>