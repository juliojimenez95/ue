<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Auth;

class HomeController extends Controller
{
    public function index(Request $request){
        date_default_timezone_set('America/Bogota');
        /*$dia = Order::where('Creada', session('session_login'))->whereDay('FechaFactura', date('d'))->count();
        $mes = Order::where('Creada', session('session_login'))->whereMonth('FechaFactura', date('m'))->count();
        $anulados = Order::where('Anulada', session('session_login'))->count();
        $pendientes = Order::where('Creada', session('session_login'))->where('Enabled', 1)->count();
        $facturados = Order::where('Creada', session('session_login'))->where('Enabled', 0)->count();*/
    	return view('home');
    }
}
