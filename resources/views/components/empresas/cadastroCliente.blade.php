<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
    <body>
        <form action="/cadastrar-cliente" method="post"> 
         @csrf   
        <div>
            <label for="name">Digite seu Nome:</label>
            <input type="text" name="name" />
        </div>
        <br>
        <br>
        <div>
            <label for="email">Digite seu Email:</label>
            <input type="text" name="email" />
        </div>
        <br>
        <br>
        <div>
            <label for="password">Senha:</label>
            <input type="text" name="password" />
        </div>
        <br>
        <br>
        <div class="button">
        <button type="submit">Salvar</button>

        <div>
    </body>
</html>