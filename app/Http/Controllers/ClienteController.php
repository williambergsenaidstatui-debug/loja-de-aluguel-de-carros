<?php

namespace App\Http\Controllers;


use App\Models\ClienteModel;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function salva_cliente(request $request){

        $request->validate([
            'nome' => 'required',
            'data_de_nascimento' => 'required',
            'cpf'=> 'required',
            'numero' => 'required',
            'email' => 'required',
            
        ]);
        
        try {
            $cliente = new ClienteModel();
            $cliente ->cpf = $request -> cpf;
            $cliente ->numero =$request -> numero;
            $cliente ->email = $request ->email;
            $cliente ->data_de_nascimento = $request -> data_de_nascimento;
            $cliente-> save();
        } catch (\Throwable $th) {
             
        }
       
        $data = [
                'erro'=> 'n',
                'cliente' => $cliente,
            ];

            return response()->json($data,200);

    }

    public function exibe_cliente($id){
      $cliente = ClienteModel::find($id);

        $data = [
                'erro'=> 'n',
                'cliente' => $cliente,
            ];

            return response()->json($data,200);
            
        }

        public function todos_clientes(Request $request){
            $cliente = ClienteModel::get()->all();

         $data = [
                'erro'=> 'n',
                'cliente' => $cliente,
            ];

            return response()->json($data,200);

        }


    public function home($id)
    {
        $cliente = cliente::find($id);

        return view('home')->with('home', $cliente);

    }
 
}    
    
