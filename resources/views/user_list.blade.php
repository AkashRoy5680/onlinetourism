@extends('Admin.admin_layout')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">


<div class="panel-heading" ><b>Users List</b></div>
<a href="/userinsert" class="btn btn-info"><b>Insert a new user</b></a>
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
<td><b>Name</b></td>
<td><b>Email</b></td>

<td><b>Mobile</b></td>
<td><b>DateOfbirth</b></td>
<td><b>Gender</b></td>
<td><b>City</b></td>
<td><b>View All</b></td>
<td><b>Edit</b></td>
<td><b>Delete</b></td>

</tr>

 @foreach($register_users as $user)
 
 <tr>
 <td>{{ $user->id }}</td>
 <td>{{ $user->name }}</td>
 <td>{{ $user->email }}</td>

 <td>{{ $user->mobile }}</td>
 <td>{{ $user->birth }}</td>
 <td>{{ $user->gender }}</td> 
 <td>{{ $user->city }}</td>
 <td><a href="details&<?php echo $user->id?>" class="btn btn-info">View Details</a></td>
 <td><a href="edit_user&<?php echo $user->id?>" class="btn btn-info">Edit</a></td>
 <td><a onclick="return confirm('Delete this record?')" class="btn btn-danger" href="delete_user&<?php echo $user->id?>">Delete X</a></td>
 </tr>
@endforeach
</table>

</div>
{!! $register_users ->render() !!}
</div>
</div>
</div>
@endsection