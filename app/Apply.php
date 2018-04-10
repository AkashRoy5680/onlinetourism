<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
class Apply extends Model
{

    protected $table="applies";
    public static function formstore($data)
	
	{
	
		$postid=Input::get('postid');
	   $userid=Input::get('userid');
		$email=Input::get('email');
		$phone=Input::get('phone');
		$address=Input::get('address');
	
		
		
		
		
		$apply=new Apply();
		$apply->postid=$postid;
		$apply->userid=$userid;
		$apply->email=$email;
		$apply->phone=$phone;
		$apply->address=$address;
		
		
		
		$apply->save();
	}
}
