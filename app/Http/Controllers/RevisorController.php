<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{

public function index(){

    $product_to_check = Product::where('is_accepted',null)->first();
    $product_is_revisioned = Product::where('is_accepted', '!=',null)->take(10)->get();
    return view('revisor.index',compact('product_to_check', 'product_is_revisioned'));

}


public function acceptProduct(Product $product){

    $product->setAccepted(true);
    return redirect()->back()->with('message','annuncio accettato');

}


public function rejectProduct(Product $product){

    $product->setAccepted(false);

    return redirect()->back()->with('message','annuncio rifiutato');

}

public function setReverseProduct(Product $product)
{
    $product->setAccepted(null);
    return redirect()->back()->with('message', 'Azione annullata con successo.');
}

public function deleteProduct(Product $product){
if($product->is_accepted == false){
    $product->delete();
}
    return redirect()->back()->with('message', 'Prodotto eliminato con successo.');

}

    public function makeRevisor(User $user){
        Artisan::call( 'app:makeUserRevisor', ['email'=> $user->email]);
        return redirect()->route('home')->with('message', "L'utente è diventato revisore");
    }
}
