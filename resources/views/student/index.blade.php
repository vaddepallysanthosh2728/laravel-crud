@extends('master')
@section('content')
<div class="row">
    <div class="col-md-12">     
        <a style="float:right;margin-top:10px;" href="{{route('student.create')}}" class="btn btn-primary">Add</a>
        <br />
        <h3 aling="center">All Students</h3>
        @if(\Session::has('success'))
            <div class="alert alert-success">{{\Session::get('success')}}</div>
        @endif
        @if(\Session::has('failed'))
            <div class="alert alert-danger">{{\Session::get('failed')}}</div>
        @endif
        @if(\Session::has('deleted'))
            <div class="alert alert-success">{{\Session::get('deleted')}}</div>
        @endif
        <table class="table table-striped">
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td style="text-align:center" colspan="2">Actions</td>
            </tr>
            @foreach($students as $s)
            <tr>
            <td>{{$s['first_name']}}</td>
            <td>{{$s['last_name']}}</td>
            <td style="float:right">
                <a href="{{action('StudentController@edit',$s['id'])}}" class="btn btn-primary btn-sm">Edit</a>
            </td>
            <td>
            <form action="{{action('StudentController@deleteStudent',$s['id'])}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
            </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
