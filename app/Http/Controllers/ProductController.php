<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use DB;

class ProductController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function search(Request $request){
        $productList = Product::searchProduct($request->searchWord);
        return  view('product.results', compact('productList'));
    }

    public function create(Request $request){
        $img_url='';
        if($request->productUrlImg==null){
            $img_url='https://cdn5.vectorstock.com/i/1000x1000/86/24/nutrition-healthy-food-icon-vector-12208624.jpg';
        }else{
            $img_url=$request->productUrlImg;
        }
        DB::table('product')->insert([
            'name' => $request->productName,
            'owner_id' => \Auth::user()->id,
            'img_url' => $img_url,
            'stock' => $request->productStock,
            'price' => $request->productPrice,
        ]);
        $productList = Product::getProducts();
        return  redirect()->route('home');;
    }
    
    public function delete(Request $request){
        $productList = Product::where('name','=',$request->productName)->firstOrFail();
        if($productList!=null){
            if($productList->owner_id == \Auth::user()->id){
                $productList->delete();
            }
        }
        return  redirect()->route('home');;
    }
        
    public function buy(Request $request){
        $prod = Product::find($request->product_id);
        $newStock = $prod->stock - $request->productQty;
        $user = User::find($request->seller_id);
        $newSale = $user->n_sales + $request->productQty;
        $user->n_sales=$newSale;
        $user->save();
        Product::find($request->product_id)->update(['stock' => $newStock]);

        return  redirect()->route('home');;
    }
    public function details(string $product_id){
        $product = Product::find($product_id);
        $user = User::find($product->owner_id);
        return  view('product.details', compact('product','user'));
    }

    
}
