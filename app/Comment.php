<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;

class Comment extends Model
{
    protected $table="comment";
    protected function formstore($data)
	
	{
	
		$comment=Input::get('comment');
		$postid=Input::get('postid');
		$userid=Input::get('userid');
		$username=Input::get('username');
		
		
		
		
		$coments=new Comment();
		
		$coments->postid=$postid;
		$coments->userid=$userid;
		$coments->username=$username;
		$coments->comment=$comment;
	
		
		
		$coments->save();
	}
}
