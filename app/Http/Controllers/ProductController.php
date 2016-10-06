<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Order;
use App\User;
use Auth;
use Session;
use Mail;
use Stripe\Charge;
use Stripe\Stripe;

class ProductController extends Controller
{
    public  function getIndex()
    {
        $products = Product::paginate(3);;
        return view('shop.index', ['products'=>$products]);
    }

    public function getAddToCart(Request $request ,$id)
    {
        $product = Product::find($id);
        $oldCart  = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('product.index');
    }

    public function getCart()
    {
        if(!Session::has('cart')){
            return view('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shoppingCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout()
    {
        if(!Session::has('cart')){
            return view('shop.shoppingCart');
        }
        $oldCart =  Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total'=> $total]);
    }

    public function postCheckout(Request $request)
    {
        if(!Session::has('cart')){
            return redirect()->route('shop.shoppingCart');
        }
        $oldCart =  Session::get('cart');
        $cart = new Cart($oldCart);
        Stripe::setApiKey('sk_test_99A9efJfEqUmSkvrpcTZHTxN');

        try{
         $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "usd",
                "source" => $request->input('stripeToken'),
                "description" => "Test Charge"
            ));
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $charge->id;
            Auth::user()->orders()->save($order);

        } catch (\Exception $e) {
          return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        $data = [];
        Mail::send('emails.reminder', $data, function ($message) {
            $message->from('sonfordhr@gmail.com', 'Laravel');

            $message->to('sonfordonyango@gmail.com');//->cc('sonfordson@outlook.com');
        });

        Session::forget('cart');
        return redirect()->route('product.index')->with('success', 'Successfully Purchased Products');
    }
}
