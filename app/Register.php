<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
	
/*class Register extends Model
{*/
	protected $table="register_users";
    public static function formstore($data)
	//geting data from register controller
	{
	
		$username=Input::get('uname');
		$email=Input::get('email');
		$password= Hash::make(Input::get('password'));
		$mobile=Input::get('mobile_no');
		$birth=Input::get('Date');
		$gender=Input::get('gender');
		$utype=Input::get('utype');
		$category=Input::get('category');
		$city=Input::get('city');
		$image="--";
		$institute="--";
		$SSC="--";
		$HSC="--";
		$proffession="--";
		
		
		
		
		$users=new Register();	
		$users->name=$username;
		$users->email=$email;
		$users->password=$password;
		$users->mobile=$mobile;
		$users->birth=$birth;
		$users->gender=$gender;
		$users->utype=$utype;
		$users->category=$category;
		$users->city=$city;
		$users->image=$image;
		$users->institute=$institute;
		$users->SSC=$SSC;
		$users->HSC=$HSC;
		$users->proffession=$proffession;
		
		
		$users->save();
	}
}
