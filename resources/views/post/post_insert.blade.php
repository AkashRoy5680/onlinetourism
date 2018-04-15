@extends('Admin.admin_layout')
@section('content')

<Center><h1> Create a post here<h1></Center>

<style>
select {width:400px;}
</style>

<div class="container" style="padding-left:150px;">
  <form action="\admin_post_insert" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group" class=''>
	 <p><b>Tour Type</b></p>
    <select name="class" class="form-control">
	 <option value="Package Tour" selected>Package Tour</option>
    <option value="Escorted Tour">Escorted Tour</option>
    <option value="Hosted Tour" >Hosted Tour</option>
    <option value="All-Inclusive Tour">All-Inclusive Tour</option>
   <option value="Luxury Tour">Luxury Tour</option>
    </select>
   
	<div class="form-group">
	 <p><b>Travel Season</b></p>
     <select name="medium" class="form-control">
	 <option value="Summer" selected>Summer</option>
     <option value="Winter">Winter</option>
  </select>
  <div class="form-group">
	 <p><b> Tourist Gender</b></p>
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
   <p><b>Guideline</b></p>
   <input type="text" name="salary"  class="form-control"  placeholder="Provided preferable Guideline" required />
  </div>
  <div class="form-group">
   <p><b>Describes Address in Details</b></p>
   <input type="text" name="content"  class="form-control"style="height:100px; width:500px;"  placeholder="You can add any additional requirement here" required />
  </div>
   </br>
   <center> <button type="submit" style=" width:100px; Color:green;"  class="btn btn-default">Post</button></center>
  </form>
</div>

</body>

@endsection