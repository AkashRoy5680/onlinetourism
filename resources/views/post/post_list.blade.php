@extends('Admin.admin_layout')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">



<div class="panel-heading" ><b>Posts List</b></div>
<a href="/postinsert" class="btn btn-info"><b>Make a new post</b></a>
@if(Session::has('msg'))
	
<div class="row" >
<div class="col-md-12" >
<div class="alert alert-success">
{{ Session::get('msg')}}
</div>
</div>
</div>
@endif
@if(Session::has('success'))
	
<div class="row">
<div class="col-md-12">
<div class="alert alert-success">
{{ Session::get('success')}}
</div>
</div>
</div>
@endif


<table class="table" >
<tr>
<td><b>ID</b></td>
<td><b>Tour Type</b></td>
<td><b>Travel Season</b></td>
<td><b>Tourism Gender</b></td>
<td><b>City</b></td>
<td><b>Provided Guideline</b></td>
<td><b>Details</b></td>
<td><b>View All</b></td>
<td><b>Edit</b></td>
<td><b>Delete</b></td>
</tr>

 @foreach($post as $data)
 
 <tr>
 <td>{{ $data->id }}</td>
 <td>{{ $data->class }}</td>
 <td>{{ $data->medium }}</td>

 <td>{{ $data->gender }}</td>
 <td>{{ $data->city }}</td>
 <td>{{ $data->salary }}</td> 
 <td>{{ $data->content }}</td>
 <td><a href="postdetails&{{ $data->id }}" class="btn btn-info">View Details</a></td>
  <td><a href="edit_post&{{ $data->id }}" class="btn btn-info">Edit</a></td>
 <td><a onclick="return confirm('Delete this record?')" class="btn btn-danger" href="delete_post&{{ $data->id }}">Delete</a></td>
 </tr>
@endforeach
</table>
{!! $post ->render() !!}
</div>
</div>
</div>
</div>
@endsection