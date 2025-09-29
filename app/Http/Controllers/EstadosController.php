<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EstadosController extends Controller
{
    //
    protected $token = '0b2b17bc-16c4-41db-bb76-aa43b8912e4f';
    public function index()
    {
        return view('estados.index');
    }

    public function cargarEstados()
    {
        $url = 'https://api.copomex.com/query/get_estados?token=' . $this->token;

        try {
            //code...
            $respuesta = Http::get($url);
            $datos = $respuesta->json();
            $estados = $datos['response']['estado'];
            foreach ($estados as $estado) {
                Estado::updateOrCreate(
                    ['nombre' => $estado],
                    ['nombre' => $estado]
                );
            }
            return  response()->json([
                'success' => true,
                'message' => 'Operación realizada correctamente',
            ], 200);
        } catch (\Throwable $th) {
            return  response()->json([
                'success' => false,
                'message' => 'Operación fallida',
            ], 500);
        }
    }

    public function mostrarEstados()
    {
        $estados = array();
        try {
            $estados = Estado::orderBy('nombre', 'asc')->get();
            return response()->json([
                'data' => $estados,
                'success' => true,
                'message' => 'Operación realizada correctamente'
            ], 200);
        } catch (\Throwable $th) {
            return  response()->json([
                'data' => $estados,
                'success' => false,
                'message' => 'Operación fallida',
            ], 500);
        }
    }

    public function estadoMunicipios($idEstado)
    {
        $municipios=array();
        $estado = Estado::find($idEstado);
        if ($estado) {
            try {
                $url = 'https://api.copomex.com/query/get_municipio_por_estado/'.$estado->nombre.'?token=' . $this->token;
                //code...
                $respuesta = Http::get($url);
                $datos = $respuesta->json();
                $municipios = $datos['response']['municipios'];

                return view('estados.estado_municipios',['estado'=>$estado,'municipios'=>$municipios]);
                
            } catch (\Throwable $th) {
                return redirect('/');
            }
        }

        return redirect('/');
               
    }
}
