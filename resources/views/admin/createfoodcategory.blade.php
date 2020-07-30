@extends('adminlte::page')

@section('title', 'AddFoodCategory')

@section('content')
<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Add NewFoodCategory</h3>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
              <a class="btn btn-primary" href="{{route('foods.index')}}">View All FoodCategory</a>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <form action="{{route('foods.store')}}" method="post">
               {{csrf_field()}}
               <div class="form-group">
                   <input type="text" name="foodCategory" id="foodCategory" class="form-control" placeholder="Enter FoodCategory Name">
               </div>
               <div class="form-group">
                  <button type="submit" name="add" class="btn btn-primary btn-block">Add Category</button>
               </div>
           </form>
        </div>
        <!-- /.box-body -->
    </div>
@stop