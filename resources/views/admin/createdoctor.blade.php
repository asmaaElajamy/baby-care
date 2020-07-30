@extends('adminlte::page')

@section('title', 'Add Doctor')

@section('content')
<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Add new Doctor</h3>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
            <!--  <a class="btn btn-primary" href="#">Add User</a> !-->
            <a class="btn btn-primary" href="{{route('doctors.index')}}">View All Doctors</a>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
<form action="{{route('doctors.store')}}" method="post">
    {{csrf_field()}}
<div class="form-group">
    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Doctor Name">
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
    <button type="submit" name="add" class="btn btn-primary btn-block">Add Doctor</button>
</div>
</form>
        </div>
        <!-- /.box-body -->
    </div>
@stop