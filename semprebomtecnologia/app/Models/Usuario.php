<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function lista(){
        return (object)[
            'nome'=>'Matheus Freire',
            'Tel'=>'473 99 9909-1752'
        ];
    }

    









}
