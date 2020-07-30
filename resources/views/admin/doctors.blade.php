@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Doctors</h3>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
      <a class="btn btn-primary" href="{{route('add')}}">Add Doctor</a>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td>#</td>
                    <td>name</td>
                    <td>address</td>
                    <td>rate</td>
                    <td>specialty</td>
                    <td>mobile</td>
                    <td>phone</td>
                    <td>email</td>
                    <td>longitude</td>
                    <td>latitude</td>
                    <td>photo</td>
                </tr>
                </thead>
                @if(count($doctors) > 0)
                    @foreach($doctors as $doctor)
                        <tr>
                            <td>{{$doctor->id}}</td>
                            <td>{{$doctor->name}}</td>
                            <td>{{$doctor->address}}</td>
                            <td>{{$doctor->rate}}</td>
                            <td>{{$doctor->specialty}}</td>
                            <td>{{$doctor->mobile}}</td>
                            <td>{{$doctor->phone}}</td>
                            <td>{{$doctor->email}}</td>
                            <td>{{$doctor->longitude}}</td>
                            <td>{{$doctor->latitude}}</td>
                            <td>{{$doctor->photo}}</td>
                            <td><a class="btn btn-info" href="{{route('edit',$doctor->id)}}">Edit</a></td>
                            <!--<td><form method="post" action="{{route('delete.destroy',$doctor->id)}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button class="btn btn-danger">Delete</button></td> !-->
                            <td><button class="btn btn-danger" data-catid={{$doctor->id}} data-toggle="modal" data-target="#delete">Delete</button></td>
                            </tr>
              @endforeach
                @endif
            </table>
        </div>
        <!-- /.box-body -->
         <!--Delete Confirmation!-->
    </div>
    <div class="modal modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('delete.destroy',$doctor->id)}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="id" id="id" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">No, Cancel</button>
	        <button type="submit" class="btn btn-danger">Yes, Delete</button>
	      </div>
      </form>
    </div>
  </div>
</div>
@stop