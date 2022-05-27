@extends('master')
@section('content')
<div class="row">
    <div class="col-md-12">     
        <a style="float:right;margin-top:10px;" href="{{route('student.create')}}" class="btn btn-primary">Add</a>
        
        <br />
        <h3 aling="center">All Students</h3>
        <table class="table table-striped">
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td style="text-align:center">Actions</td>
            </tr>
            @foreach($students as $s)
            <tr>
            <td>{{$s['first_name']}}</td>
            <td>{{$s['last_name']}}</td>
            <td style="float:right">
                <a href="{{action('StudentController@edit',$s['id'])}}" class="btn btn-primary btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection