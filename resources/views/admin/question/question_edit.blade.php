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


    <h1 class="text-center">Answer</h1>
    <div class="form-group">
        {!! Form::label('answer','Answer 1:') !!}
        {!! Form::text('answer[]',null,['class'=>'form-control form-control-user']) !!}
        {{Form::radio( 'is_right1','true')}}
        {{Form::label('active', 'true')}}
        {{Form::radio('is_right1', 'false',true)}}
        {{Form::label('active', 'false')}}

    </div>
    <div class="form-group">
        {!! Form::label('answer2','Answer 2:') !!}
        {!! Form::text("answer[]",null,['class'=>'form-control form-control-user']) !!}
        {{Form::radio( 'is_right2','true')}}
        {{Form::label('active', 'true')}}
        {{Form::radio('is_right2', 'false',true)}}
        {{Form::label('active', 'false')}}

    </div>
    <div class="form-group">
        {!! Form::label('answer3','Answer 3:') !!}
        {!! Form::text('answer[]',null,['class'=>'form-control form-control-user']) !!}
        {{Form::radio( 'is_right3','true')}}
        {{Form::label('active', 'true')}}
        {{Form::radio('is_right3', 'false',true)}}
        {{Form::label('active', 'false')}}

    </div>
    <div class="form-group">
        {!! Form::label('answer4','Answer 4:') !!}
        {!! Form::text('answer[]',null,['class'=>'form-control form-control-user']) !!}
        {{Form::radio( 'is_right4','true')}}
        {{Form::label('active', 'true')}}
        {{Form::radio('is_right4','false', true)}}
        {{Form::label('active', 'false')}}

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
