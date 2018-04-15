@extends('Admin.admin_layout')
@section('content')

	<div style="clear:right; float:left;padding-left:250px; padding-right:100px;">
	<table>
	<tr>
	<p><b>Post Details</b></p>
	</br>
	<td><b>Tour Type</b></td>
	<td style="padding-right:50px;padding-left:100px; "><b>:</b></td>
	<td>{{$Data->class}}</td>
	</tr>		
	</table>
	</br>
	<table>
	<tr>
	<td><b>Travel Season</b></td>
	<td style="padding-right:48px;padding-left:103px; "><b>:</b></td>
	<td>{{$Data->medium}}</td>

	</tr>		
	</table>
	</br>
	<table>
	<tr>
	<td ><b>Tourism Gender</b></td>
	<td style="padding-right:50px;padding-left:105px; "><b>:</b></td>
	<td>{{$Data->gender}}</td>

	</tr>		
	</table>
	</br>
	<table>
	<tr>
	<td ><b>City</b></td>
	<td style="padding-right:50px;padding-left:184px; "><b>:</b></td>
	<td>{{$Data->city}}</td>

	</tr>		
	</table>
	</br>
	<table>
	<tr>
	<td><b>Provided Guideline</b></td>
	<td style="padding-right:50px;padding-left:104px; "><b>:</b></td>
	<td>{{$Data->salary}}</td>

	</tr>		
	</table>
			
	</br>
	<table>
	<tr>
	<td ><b>In Detail Informations</b></td>
	<td style="padding-right:50px;padding-left:67px; "><b>:</b></td>
	<td>{{$Data->content}}</td>

	</tr>		
	</table>
	
	
	
	</br></br></br></br>
					
			
	</div>
	
	@endsection