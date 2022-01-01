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
<h1 class="text-center">Create Blogs</h1>
<img class="rounded mx-auto d-block" width="180px" src="/images/{{$blog->image}}" alt="">
<div class="container">
    {!! Form::model($blog,['method' => 'PATCH','action'=>['App\Http\Controllers\AdminBlogController@update',$blog->id],'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control form-control-user']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body :','Body:') !!}
        {!! Form::text('body',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image','Image:') !!}
        {!! Form::file('image',['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('save',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}



{{-- Delete Blog--}}

    {!! Form::open(['method' => 'DELETE','action'=>['App\Http\Controllers\AdminBlogController@destroy',$blog->id]]) !!}
    {!! Form::submit('Delete Blog',['class'=>'btn btn-danger','id'=>'confirmdelete']) !!}
    {!! Form::close() !!}
</div>



@include('include.error_forms')
</body>
</html>
