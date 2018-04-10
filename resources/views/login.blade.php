@extends('layout2')
@section('content')
 <center>
<h1>Welcome to Login Page</h1>
<div class="con">
<form action="login_check" method="post">
 <input type="hidden" name="_token" value="{{csrf_token()}}">

<b>User Email:</b></br>
<Input type="email"  name="email" />
@if($errors->has('email')) <p>{{$errors->first('email')}}</p>@endif
</br>
<b>Password:</b></br>
<Input type="password" name="password" /></br>
<div>
@if($errors->has('password')) <p>{{$errors->first('password')}} </p>@endif
</div>
@if(Session::has('failure'))
<div class="row">
<div class="col-md-12">
<div class="alert alert-success">
{{ Session::get('failure')}}
<div>
<div>
<div>
@endif
</br>
<input type="submit" name="submit" value="Log In"  style="height:30px;width:100px; color:green;" />
<p style="text-align:right;"><b><a href="{{URL::to('/register')}}" style="text-decoration:none;">New user register here!</b></a></p> 

@endsection


  


