<x-layout title="Consulte seu Cep">

    <h1>Consultar CEP</h1>
    <form action="/buscar-cliente" method = "Post"> <!-- form action, CAMINHO -> METODO POSTAR -->
        @csrf <!-- segurança para o usuario nao digitar fora -->
        <label Nome: ></label>
        <input type="text" name= "cep" id = "cep" placeholder = "Digite o cep ex:
        50109098000198 "> <br><br>  <!-- só preciso enviar o name, o id é o main , e o create e o update o laravel se encarrega -->
        <button type ="Submit" > Cadastrar</button>
        <select name="users">
            @foreach ($users as $user)
                <option value= "{{$user->id}}" >{{$user->name}} </option>  
            @endforeach
        </select>
    </form>   
</x-layout>