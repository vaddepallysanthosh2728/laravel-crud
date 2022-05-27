@extends('master')
@section('content')

<div class="row">
    <div class="col-md-12">     
        <!-- <a style="float:right;margin-top:10px;" href="{{route('student.create')}}" class="btn btn-primary">Add</a> -->
        
        <br />
        <h3 aling="center">Edit Student</h3>
        <form action="{{action('StudentController@update',$id)}}" method="post">
            <div class="col-md-6">
                <div class="form-group">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="first_name" value="{{$student->first_name}}" placeholder="Enter First Name" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="last_name " value="{{$student->last_name}}" placeholder="Enter Last Name" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
        
    </div>
</div>
@endsection