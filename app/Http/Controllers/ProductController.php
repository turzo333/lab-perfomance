<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Illuminate\Support\Facades\DB;
use Validator;

class ProductController extends Controller
{

    function index(){

        $products = DB::table('products')->get();
    	return view('product.index')->with('cates', $products);


    }
    function add(){
        return view('product.add');
    }
    function store(Request $request){

        $validation = Validator::make($request->all(), [
            'name'=>'required',
            'quantity'=>'required',
            'price'=>'required'
        ]);

        $request->session()->flash('msg', 'Input Data can Not Be null');


        if($validation->fails()){
            return redirect()->route('product.add');

        }


        $product = new Product();
        $product->name = $request->name;
        $product->quantity =$request->quantity;
        $product->price =$request->price;

        if($product->save()){
            return redirect()->route('product.index');
        }else{
            return redirect()->route('product.add');
        }
    
       }

       function edit($id){


    	$api = DB::table('products')
    	->where('id', $id)
    	->get();

    	return view('product.edit')->with('products', $api);

    }

    function delete($id){


        DB::table('products')->where('id', $id)->delete();

        return redirect()->route('product.index');


    }


     function editstore($id,Request $request){

        $validation = Validator::make($request->all(), [
            'name'=>'required',
            'quantity'=>'required',
            'price'=>'required'
        ]);


        if($validation->fails()){
            $request->session()->flash('msg', 'Input Data can Not Be null');

            return redirect()->route('product.edit',$id);

        }


        $product = Product::find($id);
         $product->name =$request->name;
        $product->quantity =$request->quantity;
        $product->price =$request->price;
        
         $product->save();

        return redirect()->route('product.index');

    }

function allload(){

    $cates = DB::table('products')
    ->get();


    return view('product.load')->with('cates', $cates);
}
    function load($id){
        $cates = DB::table('products')
            ->where('name','like', "%$id%")
            ->get();


            return view('product.load')->with('cates', $cates);
    }
}
