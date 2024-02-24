<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>

    <h1>Administracion de propiedades</h1>

    <div style="margin: 5px;">
        <a href="{{route('ver.duenios')}}" class="btn btn btn-primary"> ver dueños</a>
        <a href="{{route('ver.apartamentos')}}" class="btn btn btn-primary"> ver propiedades</a>
        <a href="{{route('registrar.duenio')}}" class="btn btn btn-primary"> Registrar Dueño</a>

        <h5>Ver propiedades de un dueño especifico</h5>
        <form action="{{ route('ver.propiedades.duenio') }}" method="GET">
            <div>
               
                <input type="text" id="idDuenio" name="idDuenio" placeholder="ingrese el id del dueño" pattern="[0-9]+" required>
                <button type="submit" class="btn btn-primary">Ver propiedades</button>
            </div>
           
        </form>

        <h5>Saber el dueño de una propiedad</h5>
        <form action="{{ route('ver.duenio.propiedad') }}" method="GET">
            <div>
               
                <input type="text" id="idPropiedad" name="idPropiedad" placeholder="ingrese el id de la pripiedad" pattern="[0-9]+" required>
                <button type="submit" class="btn btn-primary">ver dueño</button>
            </div>
           
        </form>

    </div>


    
    
</body>
</html>