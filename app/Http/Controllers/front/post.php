<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class post extends Controller
{
    function home()
    {
    	$data['result'] = DB::table('posts')->orderBy('id','desc')->get();
    	return view('front/home',$data);
    }

    function postView($id)
    {
    	$data['result'] = DB::table('posts')->where('slug',$id)->get();
    	return view('front/post',$data);
    }
    public static function page_menu()
    {
    	$result = DB::table('pages')->where('status','1')->get();
    	return $result;
    }
    function page($id)
    {
    	$data['result'] = DB::table('pages')->where('slug',$id)->get();
    	return view('front/page',$data);
    }

    function contact(Request $request)
    {
    	$request->validate([
    		'name'=> 'required',
            'email'=>'required|unique:contacts',
    		'phone'=> 'required',
    		'message'=> 'required',
    	]);
    	$data = array(
    		'name'=> $request->input('name'),
            'email'=> $request->input('email'),
    		'mobile'=> $request->input('phone'),
    		'message'=> $request->input('message'),
    		'added_on'=>date('Y-m-d h:i:s')
    	); 	
    	DB::table('contacts')->insert($data);
    	$request->session()->flash('msg','Send Messege Successfully!');
    	return redirect('contact');
    }


    
}
