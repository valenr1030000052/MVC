<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Formulario</h1>

<form action="{{route('primo.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    ingrese la nota 1
    <br>
    <input type="number" name="name1">
</label>
<br>


<label>
    ingrese nota dos
    <br>
    <input type="number" name="name1">
</label>
<br>


<label>
    ingrese nota tres
    <br>
    <input type="number" name="name1">
</label>
<br>


<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>
