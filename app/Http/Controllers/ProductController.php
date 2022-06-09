<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PhpParser\Node\Stmt\Return_;

class ProductController extends Controller
{
    public function index(){

        $product = Product::all();

        $data =[
            'products' => $product
        ];



        return view('Products',$data);
    }
}
