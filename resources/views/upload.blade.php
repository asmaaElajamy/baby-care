@extends('layouts.app')
@section('content')
<div class="container">
<div class="panel panel-default">
<div><h3>Add FoodTypes</h3></div>
<div class="panel-body">
    @include('partial.alerts')
    <form action="{{route('upload.save')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
<div class="form-group">
    <input type="text" name="category" id="category" placeholder="Enter category" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="types" id="types" placeholder="Enter types" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="photo" id="photo" placeholder="Enter photo" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="val1" id="val1" placeholder="Enter val1" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="val2" id="val2" placeholder="Enter val2" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="val3" id="val3" placeholder="Enter val3" class="form-control"/>
</div>
<div class="form-group">
    <input type="text" name="val4" id="val4" placeholder="Enter val4" class="form-control"/>
</div>
<div class="form-group">
    <textarea name="Pregnancy" class="form-control" id="Pregnancy" placeholder="Some info on Pregnancy"></textarea>
</div>
<div class="form-group">
    <textarea name="AfterBirth" class="form-control" id="AfterBirth" placeholder="Some info on AfterBirth"></textarea>
</div>
<div class="form-group">
    <textarea name="Breastfeeding" class="form-control" id="Breastfeeding" placeholder="Some info on Breastfeeding"></textarea>
</div>
<div class="form-group">
    <textarea name="Baby" class="form-control" id="Baby" placeholder="Some info on Baby"></textarea>
</div>
<div class="form-group">
    <select class="form-control" name="food">
    @if (count($foods) > 0)
    @foreach($foods as $food)
    <option value="{{$food->id}}">{{$food->foodCategory}}</option>
    @endforeach
    @endif
    </select>
</div>
<div class="form-group">
    <button type="submit" name="Add" class="btn btn-primary btn-block">Add Types</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection