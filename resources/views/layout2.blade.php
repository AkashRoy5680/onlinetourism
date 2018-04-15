<!DOCTYPE html>
<html >
<head>
  <title>Home</title>
  
  <style>
input{width:600px; height:30px;border:1px solid black; border-radius: 10px;padding:2px; }

select{width:600px; height:30px; border:1px solid black; border-radius:5px;}
</style>
  
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style=" " >

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    
	@if(Auth::user())
		<div class="navbar-header">
      <a class="navbar-brand" href="/">Home</a>
    </div>
	   <ul class="nav navbar-nav">
	   <li class="active"><a href="/contact">Contact</a></li> 
       <li class="active"><a href="{{URL::to('/profile')}}">Your Profile</a></li>
	   <li class="active"><a href="/makepost">Make Post for Tour Reservation</a></li>
       <li class="active"><a href="/allpost">See Recent Reservation</a></li>	
    		
    </ul>
		  <ul class="nav navbar-nav navbar-right">
      <li><a href="{{URL::to('/logout')}}">
	  
	 <span style="color:white"> {{ ucwords(Auth::user()->name) }}</span>  <span class="glyphicon glyphicon-user"></span> Logout</a></li>
    </ul>
	  @else
		 <div class="navbar-header">
        <a class="navbar-brand" href="/">Online Tourism</a>
        </div>
	    <ul class="nav navbar-nav">
        <li class="active"><a href="/about">About Us</a></li>
	    <li class="active"><a href="/layout">Contact</a></li>     
       </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{URL::to('/register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{URL::to('/login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
	@endif
  </div> 
</nav>
  
<div class="container">
  @yield('content')
</div>
</body>
</html>
