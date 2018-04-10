@extends('Admin.admin_layout')
@section('content')
<style>
input{width:700px; height:30px;}
</style>
<center><div>
<form action="/applyinsert" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<b>Provide the Post Id:</b></br>
<input type="text" name="postid" placeholder="The ID of the post that you are applying" required /></br>
<b>Make a User Id:</b></br>
<input type="text" name="userid" required /></br>
<b>Provide a Valid Email Address:</b></br>
<input type="email" name="email" placeholder="abc@gmail.com" required /></br>
<b>Provide Your Phone Number:</b></br>
<input type="tel" name="phone" placeholder="01983******" required /></br>
<b>Provide Your Address:</b></br>
<input type="text" name="address" placeholder="Your Present Location" required /></br>

 <input type="submit" value="Apply" class="btn btn-info">
</div>
</form>
</center>


@endsection