<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Shopping extends Controller
{
    public function index()
    {
      
        return view('shopping.landingpage');
    }


    public function electric()
    {
        $product=products::all();
        return view('shopping.electric',['product'=>$product]);
    }
    


    public function add_to_cart()
    {
      $count=session::get('counter');
      $count++;
      session::put('counter',$count);
      return view('shopping.landingpage');

    }


    public function productdetails($id)
    {
        
        $producdetails=DB::table('products')
        ->join('products__details','products.id','=','products__details.id_products')
        ->where('products.id','=',$id)
        ->first();

       
        return view('shopping.product_details',['prod'=>$producdetails]);
    }


    public function decor()
    {
        $product=products::all();
        return view('shopping.decor',['product'=>$product]);
    }

    public function product_decor($id)
    {
        

        $producdetails=DB::table('products')
        ->join('product_decor','products.id','=','product__decor.id_products')
        ->where('products.id','=',$id)
        ->first();

       
        return view('shopping.product__decor',['produ'=>$produc_decore]);
    }

}
