<?php

namespace App\Http\Controllers;

use App\Card;
use App\Route;
use App\Station;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        $stations = Station::all();

        return view('welcome', compact('cards','stations'));
    }


    public function entry(Request $request)
    {
    	Route::create([
    		'cards_id' => $request->card,
    		'origin_station' => $request->station,
    	]);

		Session::flash('mensaje','Ha ingresado correctamente');
        return redirect()->route('card.index');
    }

    public function out()
    {
        $cards = Card::all();
        $stations = Station::all();

        return view('exit', compact('cards','stations'));
    }

    public function exit(Request $request)
    {

    	$card = Card::where('id',$request->card)->get()->last();

		if($card->balance < 2500){
			Session::flash('saldo','No tienes saldo en tu tarjeta, salida restringida');
        	return redirect()->route('card.index');
		}else{
			$card->balance = $card->balance - 2500;
			$card->save();
		}

    	$route = Route::where('cards_id',$request->card)->get()->last()->update([
			'final_station' => $request->station,
    		'price' => 2500,
    	]);


		Session::flash('mensaje','Transaccion realizada, vuelva pronto');
        return redirect()->route('card.index');
    }


}
