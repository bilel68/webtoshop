<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Magasin;

use App\http\Controllers\Controller;

class MagasinController extends Controller
{

  public function magasin()
  {
    $products = Product::all();
    return view('magasin', ['products' => $products]); //
  }
}
