<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $productList = Product::getProducts();
        return view('home', compact('productList'));
    }

    public function vendedores(){
       $users = User::where('type','!=','Customer')->get();
       return view('sellers', compact('users'));
    }
    public function userProducts(Request $request){
        $productList = Product::where('owner_id','=',$request->seller_id);
        $productList = $productList->paginate(6);
        return view('home', compact('productList'));
    }
    
}
