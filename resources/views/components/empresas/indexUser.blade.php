<x-layout title="Cnpj Cadastrados">

    <h1>Clientes Cadastrados</h1>
    <table>
        <thead>     
            <tr>
                <th>ID</th>    <!-- corresponde ao Titulo -->
                <th>Name</th> 
                <th>email</th>   
            </tr>
        </thead>
    
        <tbody>
            @foreach ($users as $user) <!-- Vamos ler agora as maquinas retornadas no controller, usando um foreach, laço de repetição, utilizando ID como chave main, como mostrado no mysql. -->
                <tr>                                    
                    <td>{{ $user->id }}</td> 
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td> 
                    <td><a href="http://127.0.0.1:8000/editar-usuario/{{$user->id}}"><button>Editar</button></a></td>
                    <td><a href="http://127.0.0.1:8000/deletar-usuario/{{$user->id}}"><button>Deletar</button></a></td> <!-- deletar usuario -->
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>