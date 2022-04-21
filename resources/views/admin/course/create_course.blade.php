<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@include('admin.index')
<h1 class="text-center">Create Course</h1>
<div class="container">
    {!! Form::open(['method' => 'POST','action'=>'App\Http\Controllers\Admin_Course_Controller@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control form-control-user']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('image','Image:') !!}
        {!! Form::file('image',null,['class'=>'form-control form-control-user']) !!}
    </div>

    {!! Form::submit('save',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>
@include('include.error_forms')

</body>
</html>
