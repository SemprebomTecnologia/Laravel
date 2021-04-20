<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class UsuarioController extends Controller{

    


    public function index(){   

        $contatos = [
            ["nome"=> "dyessila", "tel"=>"159357"],
            ["nome"=> "pai", "tel"=>"098765"],
            ["nome"=> "mae", "tel"=>"321321321"],
            ["nome"=> "maria", "tel"=>"1592222357"]
        ];
        
        return view('UsuarioView', compact('contatos'));

        //print_r( compact('contatos')  );
        // dd($contatos);
        // $user = new Usuario();   
        // $usuarios = $user->lista();        
        //return "Usuario: $usuarios->nome  telefone $usuarios->Tel ;" ;
    }

    public function Login(Request $request){
        //dd($request);
        //var_dump($_REQUEST);
        //return "usuario <b>.$request->txtUser</b> e senha passado pelo Conntroller <b>.$request->inputPassword</b>  ";

        if( ($request->txtUser == 'maria')  && ($request->inputPassword == '123456')){
            return view('dashboard.principal');
        } else {
            return 'Sorry, please try  <a class="nav-link" href="foods"><i class="fa fa-home fa-fw mr-1"></i>again.</a>';
            
        }

    }
    
}
