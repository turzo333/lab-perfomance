<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    function index(){


        return view('home.index');


    }

    function list(){

        $users = DB::table('users')->get();
    	return view('user.index')->with('cates', $users);


    }

    function login(){



        return view('login.index');


    }

    function verify(Request $request){




        $user = DB::table('users')->where('username', $request->username)
					->where('password', $request->password)
					->first();
					print_r($user);
		if($user->id > 0){
            $request->session()->put('id', $user->id);

            $request->session()->put('role', $user->role);
            

					$request->session()->put('uname', $user->username);
			return redirect()->route('home.index');
		}else{
			$request->session()->flash('msg', 'invalid username/password');
			return redirect()->route('login.index');
		}





    }

    function add(){
        return view('home.add');
    }
    function store(Request $request){

      

        $user = new User();
        $user->username = $request->username;
        $user->password =$request->password;
        $user->name =$request->name;
        $user->phone =$request->phone;

        if($user->save()){
            return redirect()->route('home.index');
        }else{
            return redirect()->route('home.add');
        }
    
       }


       function edit($id){


    	$api = DB::table('users')
    	->where('id', $id)
    	->get();

    	return view('user.edit')->with('products', $api);

    }

    function delete($id){


        DB::table('users')->where('id', $id)->delete();

        return redirect()->route('user.index');


    }


     function editstore($id,Request $request){

        $validation = Validator::make($request->all(), [
            'name'=>'required',
            'username'=>'required',
            'phone'=>'required'
        ]);


        if($validation->fails()){
            $request->session()->flash('msg', 'Input Data can Not Be null');

            return redirect()->route('user.edit',$id);

        }


        $product = Users::find($id);
         $product->name =$request->name;
        $product->username =$request->username;
        $product->phone =$request->phone;
        
         $product->save();

        return redirect()->route('user.index');

    }

function allload(){

    $cates = DB::table('users')
    ->get();


    return view('user.load')->with('cates', $cates);
}
    function load($id){
        $cates = DB::table('users')
            ->where('name','like', "%$id%")
            ->get();


            return view('user.load')->with('cates', $cates);
    }
}
