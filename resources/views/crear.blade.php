<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Vista crear</center>

    <br />
    <form action="{{ route('productos.formdata')}}" method="POST">
        <label>
            Nombre:
            <input type="text" name="nombre">
        </label><br/><br/>
        <label>
            Precio:
            <input type="text" name="precio">
        </label><br/><br/>
        <label>
            Existencias:
            <input type="text" name="existencias">
        </label><br/><br/>
        <button type="submit" name="add">Enviar</button>
    </form>
</body>
</html>