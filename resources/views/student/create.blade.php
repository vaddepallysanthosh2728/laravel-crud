@extends('master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <br />
        <h3 aling="center">Add Data</h3>
        <form action="{{url('student')}}" method="post">
            <div class="form-group">
            @if(\Session::has('success'))
               <div class="alert alert-success"><p>{{\Session::get('success')}}</p></div>
            @endif
            
            </div>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" />
                @if($errors->has('first_name'))
                    <div class="text-danger">{{ $errors->first('first_name') }}</div>
                @endif
            </div>
            <div class="form-group">
                <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" />
                @if($errors->has('last_name'))
                    <div class="text-danger">{{ $errors->first('last_name') }}</div>
                @endif
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>
@endsection