<x-layout title="Cnpj Cadastrados">
    <h1>Cnpj Pesquisados</h1>
    <table>
        <thead>     
            <tr>
                <th>ID</th>    <!-- corresponde ao Titulo -->
                <th>cnpj</th>
                <th>nome</th>
                <th>razaosocial</th>
            </tr>
        </thead>
    
        <tbody>
            @foreach ($empresas as $empresa) <!-- Vamos ler agora as maquinas retornadas no controller, usando um foreach, laço de repetição, utilizando ID como chave main, como mostrado no mysql. -->
                <tr>                                    
                    <td>{{ $empresa->id }}</td>
                    <td>{{ $empresa->cnpj }}</td>
                    <td>{{ $empresa->nome }}</td>
                    <td>{{ $empresa->razaosocial }}</td>
                    <td>{{ $empresa->dataAbertura }}</td>
                    <td>{{ $empresa->porte }}</td>
                    <td>{{ $empresa->naturezaJuridica }}</td>
                    <td>{{ $empresa->opMei }}</td>
                    <td>{{ $empresa->situacao }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>