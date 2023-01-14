<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title> <!-- passando titulo como atributo no index-->
</head>
<body>
          <!-- slot sugere que carregue todo o conteudo desta view nesse local no caso o conteudo do index.blade.php -->
{{$slot}}  

</body>
</html>