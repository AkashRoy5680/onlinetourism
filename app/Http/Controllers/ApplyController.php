<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
Use Redirect;
use App\Apply;


class ApplyController extends Controller
{
     protected function store()
	{
		$data=Input::except(array('_token'));
		
		    Apply::formstore($data);
			//model::function name[note]
			
		 
			//return redirect('/allpost');
			
			return Redirect::to('allpost')->with('success','Your application successfully submitted!!');
			
		
	}
	
	
	
	 protected function admin_insert()
	{
		
		$data=Input::except(array('_token'));
		//var_dump($data);
		
		
	
		    Apply::formstore($data);
			return Redirect('applylist')->with('success','One Application successfully inserted!');
			
			
			//return Redirect::to('register')->with('success','Succesfully registered! Login now!!');
		}  
	
	
	
	protected function all_applies()
    {
		//$register_users=Register::all();(by calling this method you will get all data in a single page)
      $apply= Apply::paginate(10);
      return view('apply.applylist', compact('apply'));
    }
	
	
	
	protected function edit($id)
	{
		$Data= Apply:: findOrFail($id);
		return view('apply.edit_apply', compact('Data'));
		
	}
	
	protected function update(  Request $request,$id)
	{
		$Data= Apply:: findOrFail($id);
		
		$Data->postid=$request->postid;
		$Data->email=$request->email;
		
		$Data->phone=$request->phone;
		$Data->address=$request->address;
		
		
		$Data->save();
		return Redirect('applylist');
		
	}
	
	
	
	protected function delete_apply($id)
	{
		$user= Apply:: findOrFail($id);
         $user->delete();
		return Redirect('applylist')->with('msg',' One Application deteted successfully');
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
}
