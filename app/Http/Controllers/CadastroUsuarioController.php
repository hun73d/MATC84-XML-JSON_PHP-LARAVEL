<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroUsuarioController extends Controller
{
    //

    public function cadastro(Request $request)
    {
        
        $email  =   $request->email;
        $nome   =   $request->nome;
        $senha  =   $request->pass;
        $fone 	=	$request->fone;
        return view('index', ['email' => $email, 'nome' => $nome, 'fone' => "(".substr($fone,0,2).") ".substr($fone,2)]);
    }
}
