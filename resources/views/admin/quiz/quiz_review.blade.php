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
<h1 class="text-center">Create Question</h1>
<div class="container">
    {!! Form::open(['method' => 'POST','action'=>'App\Http\Controllers\Admin_Question_Controller@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control form-control-user']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('point :','Points:') !!}
        {!! Form::number('point','',['class'=>'form-control']) !!}
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
        {!! Form::label('answer','Answer 2:') !!}
        {!! Form::text("answer[]",null,['class'=>'form-control form-control-user']) !!}
        {{Form::radio( 'is_right2','true')}}
        {{Form::label('active', 'true')}}
        {{Form::radio('is_right2', 'false',true)}}
        {{Form::label('active', 'false')}}
    </div>
    <div class="form-group">
        {!! Form::label('answer','Answer 3:') !!}
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
    {!! Form::hidden('',[''=>'Choose Option']+$quiz,'',['class'=>'form-control']) !!}
    {{ Form::hidden('quiz_id', $qu->id) }}


    {!! Form::submit('save',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th scope="row">#</th>
        <th>question</th>
        <th>answer</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $i=1;
        ?>
    @foreach($qu as $que)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$qu->title}}</td>
        </tr>
    @endforeach
   {{$answer->answer}}

    </tbody>
</table>

@include('include.error_forms')

</body>
</html>
