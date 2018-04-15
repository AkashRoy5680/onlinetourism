<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Input;

class CommentController extends Controller
{
    protected function storedata()
	{
		$data=Input::except(array('_token'));
		
		    Comment::formstore($data);
			//model::function name[note]
			
		 
			return redirect('/allpost')->with('success','Your comment has been submitted!!');
			
			//return Redirect::to('register')->with('success','Succesfully registered! Login now!!');
			
		
	}
	
	
	
	protected function show_comments($id)
	{
		$coments= Comment::all()->where('postid',$id);
		 return view('comment.coment', compact('coments'));
		
	}
	protected function show_allcomments()
	{
		   $coments= Comment::paginate(10);
		 return view('comment.allcoment', compact('coments'));
		
	}
	
	
	protected function edit($id)
	{
		 $Data= Comment:: findOrFail($id);
		 return view('comment.edit_coment', compact('Data'));
		
	}
	
	
	protected function update(  Request $request,$id)
	{
		$Data= Comment:: findOrFail($id);
		
		$Data->comment=$request->comment;
		
		
		$Data->save();
		return Redirect('allcoment');
		
	}
	
	protected function delete_comment($id)
	{
		$coment= Comment:: findOrFail($id);
         $coment->delete();
			return Redirect('allcoment')->with('msg',' One comment deteted successfully');
	}
	
	
	
}
