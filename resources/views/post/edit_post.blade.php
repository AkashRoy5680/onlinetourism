@extends('Admin.admin_layout')
@section('content')



<style>
select {width:400px;}
</style>

<div class="container" style="padding-left:150px;">
  <form action="\update_post&<?php echo $Data->id?>" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group" class=''>
	 <p><b> Student Study Class</b></p>
    <select name="class" class="form-control">
	 <option value="Any Class" selected>Any Class</option>
    <option value="Play">Play</option>
    <option value="K.G" >K.G</option>
    <option value="Class One">Class One</option>
   <option value="Class Two">Class Two</option>
    </select>
   
	<div class="form-group">
	 <p><b> Medium/Version</b></p>
     <select name="medium" class="form-control">
	 <option value="Bangla medium" selected>Bangla medium</option>
     <option value="English medium">English medium</option>
  </select>
  <div class="form-group">
	 <p><b> Student Gender</b></p>
     <select name="gender" class="form-control">
	 <option value="Male" selected>Male</option>
     <option value="Female">Female</option>
	  <option value="other">Other</option>
  </select>

      
	<div class="form-group" class=''>
	 <p><b>City/Area</b></p>
    <select name="city" class="form-control">
	 <option value="Dhaka" selected>Dhaka</option>
    <option value="Chittagong">Chittagong</option>
    <option value="Comilla" >Comilla</option>
    <option value="Rangpur">Rangpur</option>
   <option value="Mymensingh">Mymensingh</option>
    </select>
 <div class="form-group">
   <p><b>Salary</b></p>
   <input type="text" name="salary" value="{{$Data->salary}}" class="form-control"  placeholder="Provided preferable salary" required />
  </div>
  <div class="form-group">
   <p><b>Describes Address in Details</b></p>
   <input type="text" name="content" value="{{$Data->content}}" class="form-control"style="height:100px; width:500px;"  placeholder="You can add any additional requirement here" required />
  </div>
   </br>
   <center> <button type="submit" style=" width:100px; Color:green;"  class="btn btn-default">Update</button></center>
  </form>
</div>

</body>

@endsection