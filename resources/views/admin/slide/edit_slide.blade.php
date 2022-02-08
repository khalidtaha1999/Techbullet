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
<h1 class="text-center">Edit Slide</h1>
<div class="container">
    {!! Form::model($slide,['method' => 'PATCH','action'=>['App\Http\Controllers\Admin_Slide_Controller@update',$slide->id] , 'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('file','File:') !!}
        {!! Form::File('file',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Course_id','Course:') !!}
        {!! Form::select('Course_id',[''=>'Choose Option']+$Courses,null,['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('Save',['class'=>'btn btn-primary col-sm-1 ','id'=>'confirmedit']) !!}
    {!! Form::close() !!}
        {!! Form::open(['method' => 'DELETE','action'=>['App\Http\Controllers\Admin_Slide_Controller@destroy',$slide->id]]) !!}
        {!! Form::submit('Delete Slide',['class'=>'btn btn-danger','id'=>'confirmdelete']) !!}
        {!! Form::close() !!}
    @include('include.error_forms')
</div>
</body>
</html>
