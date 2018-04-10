<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Redirect;
use Validator;
use App\Register;
use Auth;
use Hash;

class RegisterController extends Controller
{
    public function store()
	{
		
		$data=Input::except(array('_token'));
		//var_dump($data);
		
		 $rule= array(
	  'uname'=>'required',
	  'email'=>'required|email',
	  'password'=>'required|min:6',
	  'mobile_no'=>'required',
	  'Date'=>'required',
	  'gender'=>'required',
	  );
	  
	   $validator = Validator::make($data,$rule);
	    if($validator->fails())
		{
		
		return Redirect::to('register')->withErrors($validator);
		}
		else
		{
		    Register::formstore($data);
			//model::function name[note]
			$userdata=array(
		     'email'=>Input::get('email'),
		     'password'=>Input::get('password'),);
		                   
		  
		  if(Auth::attempt($userdata))
		  {
			return Redirect::to('');
			
		  }
		
			//return Redirect::to('register')->with('success','Succesfully registered! Login now!!');
		}  
			
		
	}
	
	
	 public function admin_inset_user()
	{
		
		$data=Input::except(array('_token'));
		//var_dump($data);
		
		
	
		    Register::formstore($data);
			return Redirect::to('/users')->with('msg','One user successfully inserted!');
			
			
			
		}  
			
		
	
	
	
	
	
	
	public function login()
	{
	  $data=Input::except(array('_token'));
	  
	  $rule= array(
	  'email'=>'required|email',
	  'password'=>'required',
	  );
	  
	  $validator = Validator::make($data,$rule);
	  if($validator->fails())
	  {
		  
		  return Redirect::to('login')->withErrors($validator);
	  }
	  else
	  {
		 // $data=Input::except(array('_token'));
		 $userdata=array(
		 'email'=>Input::get('email'),
		 'password'=>Input::get('password'),
		 );
		  
		  if(Auth::attempt($userdata))
		  {
			return Redirect::to('');
			
		  }
		  else
		  {
			  return Redirect::to('login')->with('failure','Invalid Email or Password!');
			 
			   
		  }
		  //var_dump($data);
	  }
		
	}
	
	 public function show_users()
    {
		//$register_users=Register::all();(by calling this method you will get all data in a single page)
      $register_users=Register::paginate(10);
      return view('user_list', compact('register_users'));
    }
	
	
	
	
	public function admin_profile()
    {
		$data=Input::except(array('_token'));
		$username=Input::get('username');
		$password=Input::get('password');
		if($username=="admin" && $password=="1234")
		{
			return redirect('/dashboard');
		}
		else
		{
			return redirect('/adminlogin');
			
		}
    }
	
	
	public function edit($id)
	{
		$Data= Register:: findOrFail($id);
		 return view('edit_user', compact('Data'));
		
	}
	
		
	
	public function show_details($id)
	{
		$Data= Register:: findOrFail($id);
		 return view('details', compact('Data'));
		
	}
	
	public function update(  Request $request,$id)
	{
		$Data= Register:: findOrFail($id);
		$Data->name=$request->uname;
		$Data->email=$request->email;
		$Data->password=Hash::make($request->password);
		$Data->mobile=$request->mobile_no;
		$Data->utype=$request->utype;
		$Data->category=$request->category;
		$Data->city=$request->city;
		
		$Data->save();
		return Redirect('users');
		
	}
	
	
	public function edit_profile($id)
	{
		$Data= Register:: findOrFail($id);
		 return view('edit_profile', compact('Data'));
		
	}
	
	
	public function update_profile(  Request $request,$id)
	{
		$Data= Register:: findOrFail($id);
		$Data->name=$request->uname;
		$Data->email=$request->email;
		$Data->password=Hash::make($request->password);
		$Data->mobile=$request->mobile_no;
		$Data->utype=$request->utype;
		$Data->category=$request->category;
		$Data->city=$request->city;
		
		$Data->save();
		return Redirect('profile');
		
	}
	
	public function delete_user($id)
	{
		$user= Register:: findOrFail($id);
         $user->delete();
			return Redirect('users')->with('msg',' One User deteted successfully');
	}
	
	
	
}
