<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Input;

class PostController extends Controller
{
     Protected function store()
	{
		$data=Input::except(array('_token'));
		
		    Post::formstore($data);
			//model::function name[note]
			
		 
			return redirect('/allpost');
			
			//return Redirect::to('register')->with('success','Succesfully registered! Login now!!');
			
		
	}
	
	protected function show_posts()
    {
		//$register_users=Register::all();(by calling this method you will get all data in a single page)
      $post= Post::paginate(10);
      return view('post.post_list', compact('post'));
    }
	
	
	
	
	protected function all_posts()
    {
		//$register_users=Register::all();(by calling this method you will get all data in a single page)
      $post= Post:: orderBy('id','desc')->paginate(5);
      return view('post.allpost', compact('post'));
    }
	
	
	
	
	
	
	protected function edit($id)
	{
		$Data= Post:: findOrFail($id);
		 return view('post.edit_post', compact('Data'));
		
	}
	
	
	
	protected function update(  Request $request,$id)
	{
		$Data= Post:: findOrFail($id);
		
		$Data->class=$request->class;
		$Data->medium=$request->medium;
		
		$Data->gender=$request->gender;
		$Data->city=$request->city;
		$Data->salary=$request->salary;
		$Data->content=$request->content;
		
		$Data->save();
		return Redirect('posts');
		
	}
	
	
	protected function delete_post($id)
	{
		$user= Post:: findOrFail($id);
         $user->delete();
			return Redirect('posts')->with('msg',' One post deteted successfully');
	}
	
	
	 protected function admin_inset_post()
	{
		
		$data=Input::except(array('_token'));
		//var_dump($data);
		
		
	
		    Post::formstore($data);
			return Redirect('posts')->with('success','One post successfully inserted!');
			
			
			//return Redirect::to('register')->with('success','Succesfully registered! Login now!!');
		}  
	
	
	protected function show_post_details($id)
	{
		$Data= Post:: findOrFail($id);
		 return view('post.post_details', compact('Data'));
		
	}
	
	
}
