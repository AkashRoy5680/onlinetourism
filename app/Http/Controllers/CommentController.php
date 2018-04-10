<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Input;

class CommentController extends Controller
{
    public function storedata()
	{
		$data=Input::except(array('_token'));
		
		    Comment::formstore($data);
			//model::function name[note]
			
		 
			return redirect('/allpost')->with('success','Your comment has been submitted!!');
			
			//return Redirect::to('register')->with('success','Succesfully registered! Login now!!');
			
		
	}
	
	
	
	public function show_comments($id)
	{
		$coments= Comment::all()->where('postid',$id);
		 return view('comment.coment', compact('coments'));
		
	}
	public function show_allcomments()
	{
		   $coments= Comment::paginate(10);
		 return view('comment.allcoment', compact('coments'));
		
	}
	
	
	public function edit($id)
	{
		 $Data= Comment:: findOrFail($id);
		 return view('comment.edit_coment', compact('Data'));
		
	}
	
	
	public function update(  Request $request,$id)
	{
		$Data= Comment:: findOrFail($id);
		
		$Data->comment=$request->comment;
		
		
		$Data->save();
		return Redirect('allcoment');
		
	}
	
	public function delete_comment($id)
	{
		$coment= Comment:: findOrFail($id);
         $coment->delete();
			return Redirect('allcoment')->with('msg',' One comment deteted successfully');
	}
	
	
	
}
