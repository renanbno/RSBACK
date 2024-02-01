<?php

namespace App\Http\Controllers;

use App\Http\Requests\ADM_PagamentoRequest;
use App\Models\ADM;
use App\Models\ADM_PagamentoModel;
use Illuminate\Http\Request;

class ADM_PagamentoController extends Controller
{
    
    public function store(ADM_PagamentoRequest $request){
        $adm = ADM::create([
          
            'tipo_pagamento'=>$request->tipo_pagamento,
         
          
            
        ]);  
       
        return response()->json([
            "success" => true,
            "message" =>"pagamento concluido com sucesso",
            "data" => $adm
        ],200);
    }

    public function retornarTodos()
    {
        $adm = ADM::all();
        return response()->json([
            'status' => true,
            'data' => $adm
        ]);
    }

   

    
    public function pesquisarPorNome(Request $request){
        $adm = ADM::where('tipo_pagamento', '>=', $request->tipo_pagamento)->get();
    
        if(count($adm)>0){
            return response()->json([
                'status'=>true,
                'data'=> $adm
            ]);
        }
        
        return response()->json([
            'status'=>false,
             'data'=> 'Não há resultados para a pesquisa.'
            ]);
    
    }

    public function excluir($id){
        $adm = ADM::find($id);
    
        if(!isset($agenda)){
            return response()->json([
                'status' => false,
                'message' => "pagamento não executado"
            ]);
        }
    
        $adm->delete();
    
        return response()->json([
            'status' => true,
            'message' => "pagamento realizado com sucesso"
        ]);
    }

    public function update(Request $request){
        $adm = ADM::find($request->id);
    
        if(!isset($agendas)){
            return response()->json([
                'status' => false,
                'message' => "pagamento não realizado"
            ]);
        }
        if(isset($request->tipo_pagamento)){
            $agendas->tipo_pagamento = $request->tipo_pagamento;
        }
    
    
    
        $adm-> update();
    
        return response()->json([
            'status' => true,
            'message' => "Cadastro atualizado"
        ]);
    
    }
}
