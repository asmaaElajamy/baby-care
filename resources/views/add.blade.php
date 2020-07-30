@extends('layouts.app')
@section('content')
<div class="container">
<div class="panel panel-default">
<div><h3>Add Doctor</h3></div>
<div class="panel-body">
    @include('partial.alerts')
    <form action="{{route('add.save')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
<div class="form-group">
    <input type="text" name="name" id="name" placeholder="Enter name" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="address" id="address" placeholder="Enter address" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="rate" id="rate" placeholder="Enter rate" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="specialty" id="specialty" placeholder="Enter specialty" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="mobile" id="mobile" placeholder="Enter mobile" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="phone" id="phone" placeholder="Enter phone" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="email" id="email" placeholder="Enter email" class="form-control"/>
</div>
<div class="form-group">
<input type="text" name="longitude" id="longitude" placeholder="Enter longitude" class="form-control"/>
</div>
<div class="form-group">
<input type="text" name="latitude" id="latitude" placeholder="Enter latitude" class="form-control"/>
</div>
<div class="form-group">
<input type="text" name="photo" id="photo" placeholder="Enter photo" class="form-control"/>
</div>
<div class="form-group">
    <button type="submit" name="Add" class="btn btn-primary btn-block">Add Doctor</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection