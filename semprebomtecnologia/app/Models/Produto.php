<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    public function  lista(){
        return (object) [
            "nome"=>'Matheus Freire Modelo, tenho acesso ha todos os metodos' ,
            "sobrenome"=>'exemplo de acesso ao model'
        ];
    }
        

}
