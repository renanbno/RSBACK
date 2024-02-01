<?php

namespace App\Http\Controllers;

use App\Models\Profissional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\ProfissionalModel;

class ProfissionalController extends Controller





{
    public function esqueciSenha(Request $request){
        $profissional = Profissional::where('cpf', '=', $request->cpf)->first();
        

        if(!isset($profissional)){
            return response()->json([
                'status' => false,
                'message' => "Cadastro não encontrado"
            ]);
        }
    
       $profissional->senha=Hash::make($profissional->cpf);

        $profissional->update();
    
        return response()->json([
            'status' => true,
            'message' => "Cadastro atualizado"
        ]);
    
        
    }

}

