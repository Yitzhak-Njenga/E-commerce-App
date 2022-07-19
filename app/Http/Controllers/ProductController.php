<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Orders;
use App\Models\Product;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use PhpParser\Node\Stmt\Return_;

class ProductController extends Controller
{
    public function index()
    {

        $product = Product::all();

        $data = [
            'products' => $product
        ];


        return view('Products', $data);
    }

    public function product($id)
    {

        $data = Product::find($id);


        return view('Detail', ['product' => $data]);

    }

    public function search(Request $request)
    {
        $product = Product::where('name', 'like' . '%' . $request->input('query') . '%')->get();

        $data = [
            'products' => $product
        ];

        return view('search', $data);
    }

    public function add_to_cart(Request $request)
    {

        if ($request->session()->has('user')) {
//            return "Hello";

            //adding to cart with user id and products id
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('products');

        } else {
            return redirect('/login');
        }
    }

    public function cartItem()
    {
        $userId = Session::get('user')['id'];

        return Cart::where('user_id', $userId)->count();
    }

    public function cartList()
    {
        $user = Session::get('user')['id'];
        $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $user)
            ->select('products.*','cart.id as cart_id')
            ->get();

        return view('CartList',['products'=>$products]);
    }
    public function removeCart($id){
        Cart::destroy($id);

        return redirect()->back();
    }
    public function oderNow(){
        $user = Session::get('user')['id'];
        $total = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $user)
            ->sum('products.price');



        return view('order',['totals'=>$total]);

    }

    public function orderPlace(Request $request){
        $user = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$user)->get();

        foreach ($allCart as $cart)
        {
            $order = new Orders;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->payment_status="pending";
            $order->first_name = $request->first_name;
            $order->second_name = $request->second_name;
            $order->location = $request->location;
            $order->email = $request->email;
            $order->phone = $request->phone;
            Cart::where('user_id',$user)->delete();
            $order->save();
        }

        return redirect('/products');


    }
}
