<x-layout title="Cep Cadastrados">

    <h1> Cep Pesquisados</h1>
    <table>
        <thead>     
            <tr>
                <th>ID</th>    <!-- corresponde ao Titulo -->
                <th>Cep</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Rua</th>
                <th>Servico</th>  
            </tr>
        </thead>
    
        <tbody>
             <!-- Vamos ler agora as maquinas retornadas no controller, usando um foreach, laço de repetição, utilizando ID como chave main, como mostrado no mysql. -->
                <tr> 
                     <td>{{ $enderecos['id'] }}</td>                                  
                    <td>{{ $enderecos['cep'] }}</td>
                    <td>{{ $enderecos['estado'] }}</td>
                    <td>{{ $enderecos['cidade'] }}</td>
                    <td>{{ $enderecos['bairro'] }}</td>
                    <td>{{ $enderecos['rua'] }}</td>
                    <td>{{ $enderecos['servico'] }}</td>
                </tr>
        </tbody>
    </table>

</x-layout>