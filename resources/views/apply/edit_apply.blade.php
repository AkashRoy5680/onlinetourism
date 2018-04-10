@extends('Admin.admin_layout')
@section('content')
<style>
input{width:700px; height:30px;}
</style>
<center><div>
<form action="/updateapply&<?php echo $Data->id?>" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<b>Provide the Post Id:</b></br>
<input type="text" name="postid" placeholder="The ID of the post that you are applying" value="{{$Data->postid}}" required /></br>
<b>Provide a Valid Email Address:</b></br>
<input type="email" name="email" placeholder="abc@gmail.com" value="{{$Data->email}} "required /></br>
<b>Provide Your Phone Number:</b></br>
<input type="tel" name="phone" placeholder="01983******" value="{{$Data->phone}}" required /></br>
<b>Provide Your Address:</b></br>
<input type="text" name="address" placeholder="Your Present Location" value="{{$Data->address}}" required /></br>

<input type="hidden" name="userid" value="{{ Auth::user()->id }}" /></br>
 <input type="submit" value="Update" class="btn btn-info">
</div>
</form>
</center>


@endsection