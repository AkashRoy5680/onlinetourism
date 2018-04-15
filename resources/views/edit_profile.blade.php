@extends('layout2')
@section('content')

<style>
input{width:700px; height:35px;border:1px solid black; border-radius: 10px;padding:2px; }

select{width:700px; height:35px; border:1px solid black; border-radius:5px;}
</style>

<div class="main">

<div class="con">

 <form action="update_profile&<?php echo $Data->id?>" method="post">
 
 <input type="hidden" name="_token" value="{{csrf_token()}}">
 <b>User Name:</b></br>
<input type="text" name="uname" placeholder="User Name" value="{{$Data->name}}" required /></br>

<b>Email:</b></br>
<Input type="Email" name="email" placeholder="Email Address" value="{{$Data->email}}" required /></br>

<b>Password:</b></br>
<input type="password" name="password" placeholder="Password" value="{{$Data->password}}"required /></br>

<b>Mobile Number:</b></br>
<Input type="tel" name="mobile_no" placeholder="019******" value="{{$Data->mobile}}" required /></br>

<b>User type:</b></br>
<select name="utype"value="{{$Data->utype}}">
<option value="Student">Student</option>
<option value="Tourist">Tourist</option>
<option value="Guide">Guide</option>
</select></br>

<b>User Category:</b></br>
<select name="category">
<option value="Student" selected>Student</option>
<option value="Adult">Adult</option>
<option value="Couple">Couple</option>
<option value="Amateur" >Amateur</option>
</select></br>
<b>City:</b></br>
<select name="city">
<option value="Dhaka" selected>Dhaka</option>
<option value="Jashore">Jashore</option>
<option value="Cumilla">Cumilla</option>
<option value="Chattagram" >Chattagram</option>
</select></br>
</br>
<p style="padding-left:270px;"><input type="submit" name="Update" value="Update" style="height:30px;width:100px; color:green;" />
 </p>

  </div>
   </form>
  </div>
 

@endsection  
