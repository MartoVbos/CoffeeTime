<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use Illuminate\Http\Request;

class CartaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $cartas = Carta::all(); // obtener todos los datos
        return view('carta.index', compact('cartas'));
    }    

    public function show($id)
    {
        $usuario = Carta::find($id); // buscar un usuario por id
        return view('cartas.show', compact('carta'));
    }
}
