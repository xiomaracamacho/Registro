<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Registros;


class RegistrarController extends Controller
{
    public function index(){
        return view('auth.principal');
    }
    
    public function store(Request $request)
    {
            $request -> validate([
                'nombreC' => 'required|max:20',
                'cedulaC' => 'required|unique:registros|max:10',
                'numTelefono' => 'required|max:12',
                'Direccion'=>'required|max:15'
            ]);
            Registros::create([
                'nombreC' => $request->nombreC,
                'cedulaC' => $request->cedulaC,
                'numTelefono' => $request->numTelefono,
                'Direccion' => $request->Direccion
            ]);   
    
            return redirect('usuarios');
    }
}
