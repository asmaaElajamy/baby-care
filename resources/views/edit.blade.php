@extends('layouts.app')
@section('content')
<div class="container">
<div class="panel panel-default">
<div><h3>Edit Doctor</h3></div>
<div class="panel-body">
    @include('partial.alerts')
    <form action="{{route('edit.update',$doctor->id)}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT" />
    {{csrf_field()}}
<div class="form-group">
    <input type="text" name="name" id="name" value="{{$doctor->name}}" placeholder="Enter name" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="address" id="address" value="{{$doctor->address}}" placeholder="Enter address" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="rate" id="rate" value="{{$doctor->rate}}" placeholder="Enter rate" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="specialty" id="specialty" value="{{$doctor->specialty}}" placeholder="Enter specialty" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="mobile" id="mobile" value="{{$doctor->mobile}}" placeholder="Enter mobile" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="phone" id="phone" value="{{$doctor->phone}}" placeholder="Enter phone" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="email" id="email" value="{{$doctor->email}}" placeholder="Enter email" class="form-control"/>
</div>
<div class="form-group">
<input type="text" name="longitude" id="longitude" value="{{$doctor->longitude}}" placeholder="Enter longitude" class="form-control"/>
</div>
<div class="form-group">
<input type="text" name="latitude" id="latitude" value="{{$doctor->latitude}}" placeholder="Enter latitude" class="form-control"/>
</div>
<div class="form-group">
<input type="text" name="photo" id="photo" value="{{$doctor->photo}}" placeholder="Enter photo" class="form-control"/>
</div>
<div class="form-group">
    <button type="submit" name="edit" class="btn btn-primary btn-block">Edit Doctor</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection