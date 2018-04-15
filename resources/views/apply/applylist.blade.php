@extends('Admin.admin_layout')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">



<div class="panel-heading" ><b>Booking List</b></div>
<a href="/applyinsert" class="btn btn-info"><b>Make a New Tour Booking</b></a>

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
<td><b>ApplierEmail</b></td>
<td><b>ApplierPhone</b></td>
<td><b>Address</b></td>
<td><b>Edit</b></td>
<td><b>Delete</b></td>
</tr>

 @foreach($apply as $data)
 
 <tr>
 <td>{{ $data->id }}</td>
 <td>{{ $data->postid }}</td>
 <td>{{ $data->userid }}</td>

 <td>{{ $data->email }}</td>
 <td>{{ $data->phone }}</td>
 <td>{{ $data->address}}</td>


 <td><a href="editapply&{{ $data->id }}" class="btn btn-info">Edit</a></td>
 <td><a onclick="return confirm('Delete this record?')" class="btn btn-danger" href="delete_apply&{{ $data->id }}">Delete X</a></td>
 </tr>
@endforeach
</table>
{!! $apply ->render() !!}
</div>
</div>
</div>
</div>
@endsection