<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stripecontroller extends Controller
{
    public function stripecheckout(){
        return view('stribe');
    }

    public function session(Request $req){
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
       $product= $req->get('product');
       $total= $req->get('total');
       $two0 = "00";
       $alltotal = "$total$two0";

       $session = \Stripe\Checkout\Session::create([
           'line_items'  => [
               [
                   'price_data' => [
                       'currency'     => 'usd',
                       'product_data' => [
                           "name" => $product,
                       ],
                       'unit_amount'  => $total,
                   ],
                   'quantity'   => 1,
               ],
                
           ],
           'mode'        => 'payment',
           'success_url' => url('success'),
           'cancel_url'  => url('stripe'),
       ]);

       return redirect()->away($session->url);
   }

   public function success()
   {
       return view('thankyoustripe');
   }
    
}
