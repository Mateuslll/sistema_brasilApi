<x-layout title="Cnpj Cadastrados">
<form action="/buscar-cnpj" method = "Post">   
    <h1>Cnpjs Cadastrados</h1>
    <table>
        <thead>     
            <tr>
                   <!-- corresponde ao Titulo -->
                <th>Cnpj</th>  
                <th>Razao Social</th>  
                <th>Nome</th>  
                <th>Porte</th>  
                <th>Situacao Cadastral</th>  
            </tr>
        </thead>
    
        <tbody>
             <!-- Vamos ler agora as maquinas retornadas no controller, usando um foreach, laço de repetição, utilizando ID como chave main, como mostrado no mysql. -->
                <tr>                                    
                    <td>{{ $empresas['cnpj'] }}</td>
                    <td>{{ $empresas['razaoSocial'] }}</td>
                    <td>{{ $empresas['nome'] }}</td>
                    <td>{{ $empresas['porte'] }}</td>
                    <td>{{ $empresas['situacao'] }}</td>
                </tr>
        </tbody>
    </table>

</x-layout>