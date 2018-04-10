
@extends('Admin.admin_layout')
@section('content');
<form action="/updatecoment&<?php echo $Data->id?>" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<center><input type="text" name="comment" placeholder="Comment here" style="width:600px; height:100px;" value="{{$Data->comment}}"required /></center>
</br>
<center><input type ="submit" name ="submit" value="UpdateComment" style="width:120px;" class="btn btn-info"></center>
</form>
@endsection