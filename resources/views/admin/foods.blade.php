@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">FoodCategory</h3>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
              <a class="btn btn-primary" href="{{route('foods.create')}}">Add FoodCategory</a>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td>#</td>
                    <td>FoodCategory</td>

                </tr>
                </thead>
                @if(count($foods) > 0)
                    @foreach($foods as $food)
                        <tr>
                            <td>{{$food->id}}</td>
                            <td>{{$food->foodCategory}}</td>
                            <td><a class="btn btn-primary" href="{{route('upload')}}">Add Types</a></td>
                           </tr>
                    @endforeach
                @endif
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@stop