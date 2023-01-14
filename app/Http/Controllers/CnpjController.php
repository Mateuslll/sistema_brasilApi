<?php // padrao

namespace App\Http\Controllers; // Caminho dos controllers
use Illuminate\Support\Facades\DB;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use GuzzleHttp\Client;



class CnpjController{    // Classe do controller, mesmo nome do controller por favor
    public function index()
    {
        return view("components.empresas.default");
    }

    public function list(){
        $empresas = Empresa::all(); // buscar todos os registros passe a variavel
        return view("components.empresas.indexCnpj")->with("empresas", $empresas);

    }
    public function consulta(){
        
        return view ("components.empresas.consulta");

    }

    public function search(Request $request){
        
        $cnpj_request = $request->cnpj;
        $response = HTTP::get("http://brasilapi.com.br/api/cnpj/v1/$cnpj_request");
        
        error_log($cnpj_request);   //acesso a variavel CNPJ apartir da requisição feita na tela de buscar cnpj
        return view ("components.empresas.resultConsulta")->with("response", $response);
    }

    public function create()    // rota para criar o formulario
    {
        return view ("components.empresas.consulta");  // retornar diretorio empresa e o arquivo create
    }

    public function store(Request $request)
    {
      
        $cnpj_request = $request->cnpj;  //mandou cpf
        $response = HTTP::get("http://brasilapi.com.br/api/cnpj/v1/$cnpj_request"); // faz a requisição na brasilapi
        
        $checkopcao_pelo_mei = '';
        if($response['opcao_pelo_mei']){

            $checkopcao_pelo_mei = 'Sim';
        }else{
            $checkopcao_pelo_mei = 'Não';
        }
        $empresas = new Empresa();
        $empresas->cnpj =$response['cnpj']; 
        $empresas->razaoSocial =$response['razao_social'];    // receber o valor do campo que recebe a palavra name
        $empresas->nome =$response['nome_fantasia'];    // receber o valor do campo que recebe a palavra name
        $empresas->dataAbertura =$response['data_situacao_cadastral'];    
        $empresas->porte =$response['porte'];    // receber o valor do campo que recebe a palavra name
        $empresas->naturezaJuridica =$response['codigo_natureza_juridica'];    // receber o valor do campo que recebe a palavra name
        $empresas->opMei =$response['opcao_pelo_mei']; 
        $empresas->situacao =$response['situacao_cadastral']; 
        $empresas->save();
        

        error_log($cnpj_request);   //acesso a variavel CNPJ apartir da requisição feita na tela de buscar cnpj
        return view ("components.empresas.resultConsulta")->with("empresas", $empresas);

    }
        

}