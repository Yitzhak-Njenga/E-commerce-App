<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use PhpParser\Node\Stmt\Return_;

class ProductController extends Controller
{
    public function index(){

        return view('Products');
    }
}
