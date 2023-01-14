<?php // padrao

namespace App\Http\Controllers; // Caminho dos controllers
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use GuzzleHttp\Client;
use App\Models\Endereco;



class UserController{
   
    public function store(Request $request){
        $users = new User();
        $users->name =$request->name;
        $users->email=$request->email;
        $users->password=$request->password; 
        //dd($request->all());
        $users->save();
        return view('components.empresas.default');
    }
    
    public function create(){
        return view ('components.empresas.cadastroCliente');
    }

    public function index(){
        $users = User::all();
        return view('components.empresas.indexUser')->with('users',$users);
    }

    public function deleteUser ($id) {
        if(User::where('id', $id)->exists()) {
            $users = User::find($id); //verifica se tem no banco de dados 
            User::destroy($id); // apaguei o usuario requisitado
            if($users->enderecos_id!=Null){
                Endereco::destroy($users->enderecos_id);
            }
            return response()->json([
            "message" => "Registro de usuario deletado"
            ], 202);
        } else {
            return response()->json([
            "message" => "Registro de usuario não encontrado"
            ], 404);
        }

    }

    public function update($id,Request $request){
        $users = User::find($id);
        $users->name =$request->name;
        $users->email=$request->email;
        $users->save();
        return view('components.empresas.default');

    }
       // $users->password=$request->password;    

    public function show($id,Request $request){
    
        $users = User::find($id);
        return view("components.empresas.editarCliente")->with("users", $users);

    } 
}