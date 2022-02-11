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
<h1 class="text-center">Edit Question</h1>
<div class="container">
    {!! Form::model($question,['method' => 'PATCH','action'=>['App\Http\Controllers\Admin_Question_Controller@update',$question->id] , 'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('point','Points:') !!}
        {!! Form::number('point',Null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('quiz_id','Course:') !!}
        {!! Form::select('quiz_id',[''=>'Choose Option']+$quiz,null,['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('Save',['class'=>'btn btn-primary col-sm-1 ','id'=>'confirmedit']) !!}
    {!! Form::close() !!}
    {!! Form::open(['method' => 'DELETE','action'=>['App\Http\Controllers\Admin_Question_Controller@destroy',$question->id]]) !!}
    {!! Form::submit('Delete Question',['class'=>'btn btn-danger','id'=>'confirmdelete']) !!}
    {!! Form::close() !!}
    @include('include.error_forms')
</div>
</body>
</html>
