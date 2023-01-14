<x-layout title="Consulte seu CNPJ">

    <h1>Cadastro Cnpj</h1>
    <form action="/buscar-cnpj" method = "Post"> <!-- form action, CAMINHO -> METODO POSTAR -->
        @csrf <!-- segurança para o usuario nao digitar fora -->
        <label Nome: ></label>
        <input type="text" name= "cnpj" id = "cnpj" placeholder = "Digite o CNPJ ex: CNPJ Gerado
        50109098000198 "> <br><br>  <!-- só preciso enviar o name, o id é o main , e o create e o update o laravel se encarrega -->
        <button type ="Submit" > Cadastrar</button>
    </form>   
</x-layout>