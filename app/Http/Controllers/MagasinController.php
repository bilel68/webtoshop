<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Controller;
use App\Creator;

class MagasinController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function magasin(Request $request)
    {
        $request->session()->flash('status', 'Affichage Réussi');
        $products = Product::find(1);
        if( $products === NULL) {
            $request->session()->flash('status', 'Aucun produits retournés');
        } else {
            $request->session()->flash('status', 'Tout est ok');
        }
        return view('magasin', ['products' =>$products]);
    }
}
