<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use DB;

class Product extends Model{

    protected $connection = 'pgsql';

    protected $table = 'public.product';

    protected $fillable = [
        'name', 'owner_id', 'stock', 'price'
    ];

    static function getProducts() {    
        $query = DB::table('public.product')
                ->where('stock','>',0)
                ->select( '*');
        $queryresponse = $query->paginate(6);
        return $queryresponse;
    }

    static function searchProduct($searchWord) {    
        $query = DB::table('public.product')
                ->where('name','LIKE','%'.$searchWord.'%')
                ->select( '*');
        $queryresponse = $query->paginate(9);
        return $queryresponse;
    }
}