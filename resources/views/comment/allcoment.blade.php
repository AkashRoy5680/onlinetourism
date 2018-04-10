@extends('Admin.admin_layout')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">



<div class="panel-heading" ><b>Comment List</b></div>

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
<td><b>PostId</b></td>
<td><b>UserID</b></td>
<td><b>UserName</b></td>
<td><b>Content</b></td>
<td><b>Edit</b></td>
<td><b>Delete</b></td>
</tr>

 @foreach($coments as $data)
 
 <tr>
 <td>{{ $data->id }}</td>
 <td>{{ $data->postid }}</td>
 <td>{{ $data->userid }}</td>

 <td>{{ $data->username }}</td>
 <td>{{ $data->comment }}</td>


  <td><a href="editcoment&{{ $data->id }}" class="btn btn-info">Edit</a></td>
 <td><a onclick="return confirm('Delete this record?')" class="btn btn-danger" href="delete_coment&{{ $data->id }}">Delete X</a></td>
 </tr>
@endforeach
</table>
{!! $coments ->render() !!}
</div>
</div>
</div>
</div>
@endsection