<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Blog</title>
    <script src="{{asset('js/tinymce.js')}}" defer></script>

</head>
<body>
@include('admin.index')
<h1 class="text-center">Create Blogs</h1>
<div class="container">
    {!! Form::open(['method' => 'POST','action'=>'App\Http\Controllers\AdminBlogController@store','files'=>true]) !!}
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

</body>
</html>
