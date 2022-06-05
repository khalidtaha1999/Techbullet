
@extends('layouts.app')

@section('content')



    <h1 class="text-center">Create Blogs</h1>
    <div class="container">
        {!! Form::open(['method' => 'POST','action'=>'App\Http\Controllers\User_Create_blog@store','files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control form-control-user']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body :','Body:') !!}
            {!! Form::textarea('body',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('image','Image:') !!}
            {!! Form::file('image',['class'=>'form-control']) !!}
        </div>

        {!! Form::submit('save',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    @include('include.error_forms')
    
    <a class="btn btn-primary" style="margin-left: 20px" href="/logout" role="button">Logout</a>



@endsection

