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
        {!! Form::text('title',null,['class'=>'form-control form-control-user']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('point :','Points:') !!}
        {!! Form::number('point',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('quiz_id','Quiz:') !!}
        {!! Form::select('quiz_id',[''=>'Choose Option']+$quiz,null,['class'=>'form-control']) !!}
    </div>
    <h1 class="text-center">Answer</h1>
    <div class="form-group">
        {!! Form::label('option_a','Option A :') !!}
        {!! Form::text('option_a',null,['class'=>'form-control form-control-user']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('option_b','Option B :') !!}
        {!! Form::text("option_b",null,['class'=>'form-control form-control-user']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('option_c','Option C :') !!}
        {!! Form::text('option_c',null,['class'=>'form-control form-control-user']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('option_d','Option D :') !!}
        {!! Form::text('option_d',null,['class'=>'form-control form-control-user']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('correct_answer','Correct Answer :') !!}

        {!! Form::select('correct_answer', ['Option A' => 'Option A',
                                  'Option B' => 'Option B',
                                  'Option C' => 'Option C',
                                  'Option D' => 'Option D',
                          ],null,['class'=>'form-control form-control-user']) !!}
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
