<?php // padrao

namespace App\Http\Controllers; // Caminho dos controllers
use Illuminate\Support\Facades\DB;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use GuzzleHttp\Client;
use App\Models\User;




class CepController{

    public function index()
    {
        $enderecos = Endereco::all(); // buscar todos os registros passe a variavel
        
    }

    public function store(Request $request)
    {
           
            $cep_request = $request->cep;  //mandou Cep
            $response = HTTP::get("http://brasilapi.com.br/api/cep/v1/$cep_request"); // faz a requisição na brasilapi do Cep
            
            //dd($request);        
            $enderecos = new Endereco();
            $enderecos->cep =$response['cep']; 
            $enderecos->estado =$response['state'];    // receber o valor do campo que recebe a palavra name
            $enderecos->cidade =$response['city'];    // receber o valor do campo que recebe a palavra name
            $enderecos->bairro =$response['neighborhood'];    
            $enderecos->rua =$response['street'];    // receber o valor do campo que recebe a palavra name
            $enderecos->servico =$response['service'];    // receber o valor do campo que recebe a palavra name
            $enderecos->save();
            $user = User::find($request['users']);
            $user->enderecos_id = $enderecos->id;
            $user->save();
            

            error_log($cep_request);   //acesso a variavel CNPJ apartir da requisição feita na tela de buscar cnpj
            return view ("components.empresas.resultConsultaCep")->with("enderecos", $enderecos);

    }

    public function create(){
        $users = User::all();
        return view ("components.empresas.consultaCep")->with('users',$users);

    }

    public function search(Request $request){
        
        $cep_request = $request->cep;
        $response = HTTP::get("http://brasilapi.com.br/api/cnpj/v1/$cep_request");
        
        error_log($cep_request);   //acesso a variavel CNPJ apartir da requisição feita na tela de buscar cnpj
        return view ("components.empresas.resultConsultaCep")->with("response", $response);
    }
}