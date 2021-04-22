<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function busca_produto(Request $request){
        //dd($request);
        //var_dump($_REQUEST);
        //return "usuario <b>.$request->txtUser</b> e senha passado pelo Conntroller <b>.$request->inputPassword</b>  ";

        if( ($request->txtUser == 'maria')  && ($request->inputPassword == '123456')){
            return view('dashboard.principal');
        } else {
            return 'Sorry, please try  <a class="nav-link" href="foods"><i class="fa fa-home fa-fw mr-1"></i>again.</a>';
            
        }

    }    

    public function insert_produto(Request $request){
        //dd($request);
        //var_dump($_REQUEST);
        //return "usuario <b>.$request->txtUser</b> e senha passado pelo Conntroller <b>.$request->inputPassword</b>  ";




        if(isset($request->NameProd)){
            echo "Thanks,  your Produtc is .$request->NameProd Create, Sucess ";
            //sleep(10);
            return '<a class="nav-link" href="principal"><i class="fa fa-home fa-fw mr-1"></i>Voltar.</a>';            
        } else {
            return 'Sorry, please try  <a class="nav-link" href="foods"><i class="fa fa-home fa-fw mr-1"></i>again.</a>';
            
        }

    }

    public function update_produto(Request $request){
        //dd($request);
        //var_dump($_REQUEST);
        //return "usuario <b>.$request->txtUser</b> e senha passado pelo Conntroller <b>.$request->inputPassword</b>  ";

        if( ($request->txtUser == 'maria')  && ($request->inputPassword == '123456')){
            return view('dashboard.principal');
        } else {
            return 'Sorry, please try  <a class="nav-link" href="foods"><i class="fa fa-home fa-fw mr-1"></i>again.</a>';
            
        }

    }

    public function delete_produto(Request $request){
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
