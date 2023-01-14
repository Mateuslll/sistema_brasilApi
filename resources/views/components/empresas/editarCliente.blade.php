<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
    <body>
        <form action="/editar-usuario/{{$users->id}}" method="Post"> 
         @csrf   
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" value="{{$users->name}}"/>
        </div>
        <br>
        <br>
        <div>
            <label for="email"> Email:</label>
            <input type="text" name="email" value="{{$users->email}}" />
        </div>
        <br>
        <br>
        <br>
        <div class="button">
        <button type="submit">Salvar</button>

        <div>
    </body>
</html>