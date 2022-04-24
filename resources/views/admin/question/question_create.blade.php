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
    @if(Session::has('create_quiz'))
        <h4 class="alert-success text-center">{{session('create_quiz')}}</h4>
    @endif
    @if(Session::has('create_question'))
          <h4 class="alert-success text-center">{{session('create_question')}}</h4>
     @endif

    {!! Form::open(['method' => 'POST','action'=>'App\Http\Controllers\Admin_Question_Controller@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control form-control-user']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('point :','Points:') !!}
        {!! Form::number('point','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('quiz_id','Quiz:') !!}
        {!! Form::select('quiz_id',[''=>'Choose Option']+$quiz,'',['class'=>'form-control']) !!}
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

    {!! Form::select('correct_answer', [
                              'Option A' => 'Option A',
                              'Option B' => 'Option B',
                              'Option C' => 'Option C',
                              'Option D' => 'Option D',
                      ],null,['class'=>'form-control form-control-user']) !!}
    </div>
    {!! Form::submit('save',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
</div>




@include('include.error_forms')

</body>
</html>
