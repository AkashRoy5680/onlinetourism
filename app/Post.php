<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
class Post extends Model
{
    protected $table="post";
    public static function formstore($data)
	
	{
	
		$class=Input::get('class');
		$medium=Input::get('medium');
		$gender=Input::get('gender');
		$city=Input::get('city');
		$salary=Input::get('salary');
		$content=Input::get('content');
		
		
		
		
		$posts=new Post();
		
		$posts->class=$class;
		$posts->medium=$medium;
		$posts->gender=$gender;
		$posts->city=$city;
		$posts->salary=$salary;
		$posts->content=$content;
		
		
		$posts->save();
	}
}
