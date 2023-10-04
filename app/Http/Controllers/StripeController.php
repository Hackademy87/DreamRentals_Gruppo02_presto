<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Stripe\Stripe;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;

class StripeController extends Controller
{


public function index(){
return view('/payment/index');
}

public function checkout(){

Stripe::setApiKey(config(key:'stripe.sk'));

$session = Session::create([
    $product = Product::all(),

    'line_items'=>[
        [
        'price_data'=>[
            'currency'=>'gbp',
            'product_data'=>[
            'name'=>$product->name,
            'id'=>$product->id,
            ],
            'unity_amount'=>$product->price,
        ],
            'quantity'=>1,
        ],
    ],
'mode'=>'payment',
'success_url'=>route('payment.success'),
'cancel_url'=>route('payment.index'),

]);
return redirect()->away($session->url);
}

public function success(){

return view('payment.success');
}














}
