@extends('layout2')
@section('content')
@if(Auth::user())
<Center><h1> Update Your Qualifications<h1></Center>

<style>
select {width:400px;}
</style>

<div class="container" style="width:600px;">
  <form action="\quali_action&<?php echo $Data->id?>" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group" class=''>
	 <p><b> Stuyding/Studied In</b></p>
    <input type="text" name="institute" placeholder="From where you are graguading" value="{{$Data->institute}}"required />
    <p><b>SSC GPA</b></p>
      <input type="text" name="SSC" placeholder="Your SSC result" value="{{$Data->SSC}}" required />	
	<p><b>HSC GPA</b></p>
      <input type="text" name="HSC" placeholder="Your HSC result" value="{{$Data->HSC}}"required />
     
       <p><b>Your present proffession</b></p>
      <input type="text" name="proffession" placeholder="Your job/position" value="{{$Data->proffession}}" required />

  <div class="form-group">
   
   </br>
   <center> <button type="submit" style=" width:100px; Color:green;"  class="btn btn-default">Save</button></center>
  </form>
</div>

</body>
@else
  <center><h2> Please logged to get access of this page</h2></center>
@endif
@endsection