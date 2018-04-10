@extends('layout2')
@section ('content')
<div class="container">


@foreach($coments as $data)
<div style="padding-top:20px;">
<table >

<tr>
<td><b>Commented By:</b></td>
<td>{{ $data->username }}</td>
</tr>
<tr >
<td><b>Coment Content:</b></td>
<td>{{ $data->comment }}</td>
</tr>
<tr>
<td><b>Commented At:</b></td>
<td>{{ $data->updated_at }}</td>
</tr>
</table>
</div>
@endforeach
</div>
@endSection