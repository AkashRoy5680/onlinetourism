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
<option value="Teacher">Teacher</option>
<option value="Gurdian">Gurdian</option>
</select></br>

<b>Select Category:</b></br>
<select name="category">
<option value="Bangla medium" selected>Bangla medium</option>
<option value="English medium">English medium</option>
<option value="Arts">Arts</option>
<option value="language learning" >Language learning</option>
</select></br>
<b>City:</b></br>
<select name="city">
<option value="Dhaka" selected>Dhaka</option>
<option value="Mymensingh">mymensingh</option>
<option value="Comilla">Comilla</option>
<option value="Chittagong" >Chittagong</option>
</select></br>
</br>
<p style="padding-left:270px;"><input type="submit" name="Update" value="Update" style="height:30px;width:100px; color:green;" />
 </p>

  </div>
   </form>
  </div>
 

  
