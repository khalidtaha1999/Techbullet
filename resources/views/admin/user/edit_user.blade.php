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
<h1 class="text-center">Edit User</h1>
<div class="text-center">
    <img width="150px" src="{{$user->photo ? $user->photo->file:'no user photo'}}" alt="" class="img-responsev img-rounded">
</div>

<div class="container">
    {!! Form::model($user,['method' => 'PATCH','action'=>['App\Http\Controllers\AdminUserController@update',$user->id] , 'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email :','Email :') !!}
        {!! Form::email('email',null,['class'=>'form-control','readonly'=>true]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone_number','Phone Number:') !!}
        {!! Form::text('phone_number',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id','Role :') !!}

        {!! Form::select('role_id',[''=>'Choose Option']+$roles,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('Save',['class'=>'btn btn-primary col-sm-1 ','id'=>'confirmedit']) !!}
    {!! Form::close() !!}
    @if(Auth::id()==$user->id)
    @else
        {!! Form::open(['method' => 'DELETE','action'=>['App\Http\Controllers\AdminUserController@destroy',$user->id]]) !!}
        {!! Form::submit('Delete User',['class'=>'btn btn-danger','id'=>'confirmdelete']) !!}
        {!! Form::close() !!}
    @endif
    @include('include.error_forms')
</div>
</body>
</html>
