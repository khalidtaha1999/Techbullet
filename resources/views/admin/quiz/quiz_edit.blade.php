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
<h1 class="text-center">Edit Quiz</h1>
<div class="container">
    {!! Form::model($quiz,['method' => 'PATCH','action'=>['App\Http\Controllers\Admin_Quiz_Controller@update',$quiz->id] , 'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Points','Points:') !!}
        {!! Form::number('Points',Null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Course-id','Course:') !!}
        {!! Form::select('Course-id',[''=>'Choose Option']+$Courses,null,['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('Save',['class'=>'btn btn-primary col-sm-1 ','id'=>'confirmedit']) !!}
    {!! Form::close() !!}
    {!! Form::open(['method' => 'DELETE','action'=>['App\Http\Controllers\Admin_Quiz_Controller@destroy',$quiz->id]]) !!}
    {!! Form::submit('Delete Quiz',['class'=>'btn btn-danger','id'=>'confirmdelete']) !!}
    {!! Form::close() !!}
    @include('include.error_forms')
</div>
</body>
</html>
