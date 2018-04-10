@extends('layout2')
@section('content')
<div style="padding-left:100px;">
<div class= "table" >
	
@if(Session::has('success'))
	
<div class="row">
<div class="col-md-12">
<div class="alert alert-success">
{{ Session::get('success')}}
</div>
</div>
</div>
@endif

@foreach($post as $data)
<table>
 
 
<tr>
	<td><h3>Post ID:{{ $data->id }}</h3></td>
	
	

	</tr>
	
 <tr>
	<td style=""><b>Student Study In</b></td>
	<td style="padding-left:0px; padding-bottom:0px; width:10px;"><b>:</b></td>
	<td>{{ $data->class }}</td>

	</tr>

 <tr>
	<td style=""><b>Student Gender</b></td>
	<td style="padding-left:0px; width:10px;"><b>:</b></td>
	<td>{{ $data->gender }}</td>

	</tr>
	
 <tr>
	<td style=""><b>City/Area</b></td>
	<td style="padding-left:0px; width:10px;"><b>:</b></td>
	<td>{{ $data->city }}</td>

	</tr>
 <tr>
	<td style=""><b>Provided Salary</b></td>
	<td style="padding-left:0px; width:10px;"><b>:</b></td>
	<td>{{ $data->salary }}</td>

	</tr>
	<tr>
	<td style=""><b>Details Info</b></td>
	<td style="padding-left:0px; width:10px;"><b>:</b></td>
	<td>{{ $data->content }}</td>

	</tr>
	
	</table>
	
	<div style="padding-top:30px; width:300px;"/>
	<a href="postcoments&{{ $data->id }}">See all comments</a>
	
	
	<form action="/coment" method="post">


	 <input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="text" name="comment" placeholder="Comment here" style="width:300px; height:70px;" required />
	<input type="hidden" name="postid" value="{{ $data->id }}"/>
	<input type="hidden" name="userid" value="{{ Auth::user()->id }}"/>
	<input type="hidden" name="username" value="{{ Auth::user()->name}}"/>
	<center><input type ="submit" name ="submit" value="Comment" style="width:100px;" class="btn btn-info"></center>
	</form>
	<a href="apply" style="width:300px;"class="btn btn-info">Apply for this JOB</a>
	</div>
 @endforeach
 

</div>
 {!! $post ->render() !!}
 @endsection
 </div>