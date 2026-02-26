<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarroModel;

class testController extends Controller
{   
    public function envia_teste(Request $request){

    $data = [

        'Palmeiras'=> '51',
        'numero'=> $request->numero
    ];

     return response()->json($data,200);
    }


        public function soma(Request $request){

    $data = [

        'soma' => $request->numero + $request->numero_dois,
    ];

     return response()->json($data,200);
    }

    public function salva_carro(request $request){

        $request->validate([

            'modelo' => 'required',
            'ano' => 'required',
            'cor'=> 'required',
            'placa' => 'required',
            'dono' => 'required',
            'valor' => 'required',
            'potencia' => 'required',
            'fabricante' => 'required',
            'tipo_gasolina' => 'required' ,
            'sobre' => 'required',
            'img' => 'required' ,
        ]);

        try {
            $carro = new CarroModel();
            $carro ->modelo = $request -> modelo;
            $carro ->ano = $request -> ano;
            $carro ->cor =$request -> cor;
            $carro ->placa = $request ->placa;
            $carro ->dono = $request -> dono;
            $carro ->valor = $request -> valor;
            $carro ->potencia = $request -> potencia;
            $carro ->tipo_gasolina = $request -> tipo_gasolina;
            $carro ->fabricante = $request -> fabricante;
            $carro->sobre = $request->sobre;
            $carro->img = $request->img;
            $carro-> save();

            $data =[
                'msg' => "carro salvo",
                'carro' => $carro,
            ];

            return response()->json($data,200);

            //code...
        } catch (\Throwable $th) {
            throw $th;
        }

        
    }

    public function exibe_carro($id){
        $carro = CarroModel::find($id);

        $data = [
                'erro'=> 'n',
                'carro' => $carro,
            ];

            return response()->json($data,200);
            
        }

        public function todos_carros(Request $request){
            $carro = CarroModel::get()->all();

         $data = [
                'erro'=> 'n',
                'carro' => $carro,
            ];

             return response()->json($data,200);


        }


        public function vercarro ($id)
    {
        $carro = CarroModel::find($id);

        return view('alterarformulario')->with('carro', $carro);

    }


    


    public function abrir_form(request $request){
         return view('formulario1',);
    }

    public function conta_marca(request $request){


        $qtd_masserati = CarroModel::where('fabricante','maserati')->count();

        $data = [];

        $data['qtd_masserati'] = $qtd_masserati;

         return view('frota',$data);
    
        
    }


  public function deleta_carro ($id)
    {
        $carro = CarroModel::find($id);

        return view('deleta_carro')->with('carro', $carro);


    }

    public function deletar_carro(Request $request){
        $request->validate([
        'id_carro' => 'required',
        ]);
        
    try{
        $carro = CarroModel::find($request->id_carro);
        $carro->delete();
        $data = [
            'erro' => 'n',
            'msg' => 'carro deletado'
        ];
        return response()->json($data,200);
            } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function vem_carros(request $request){
       

        try {
             $carros =   CarroModel::where('fabricante',$request->fabricante)->get()->all();
             $data = [
            'erro' => 'n',
            'data' => $carros
        ];
        return response()->json($data,200);
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }





        
    public function alterar_carro(Request $request){
    
        {$request ->validate ([

        'modelo' => 'required',
        'ano' => 'required',
        'cor' => 'required',
        'placa' => 'required',
        'dono' => 'required',
        'valor' => 'required',
        'potencia' => 'required',
        'fabricante' => 'required',
        'tipo_gasolina' => 'required',
        'sobre' => 'required',
        'img' => 'required',
        'id_carro' => 'required'
        

        ]);

        try {



            $carro = CarroModel::find($request->id_carro);
            $carro->modelo = $request->modelo;
            $carro->ano = $request->ano;
            $carro->cor = $request->cor;
            $carro->placa = $request->placa;
            $carro->dono = $request->dono;
            $carro->valor = $request->valor;
            $carro->potencia = $request->potencia;
            $carro->fabricante = $request->fabricante;
            $carro->tipo_gasolina = $request->tipo_gasolina;
            $carro->sobre = $request->sobre;
            $carro->img = $request->img;
            $carro->save();


            $data = [
                "erro" => 'n',
                'carro' => $carro,
            ];

            return response()->json($data,200);

        } catch (\Throwable $th) {
            //throw $th;
        }

    }

    }
    
    
        }