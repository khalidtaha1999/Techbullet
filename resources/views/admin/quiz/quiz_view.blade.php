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
@extends('admin.index')
@section('content')
    <div  class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                @if(Session::has('create_user'))
                    <h4 class="alert-success text-center">{{session('create_user')}}</h4>
                @endif
                @if(Session::has('update_user'))
                    <h4 class="alert-success text-center">{{session('update_user')}}</h4>
                @endif
                @if(Session::has('delete_user'))
                    <h4 class="alert-danger text-center">{{session('delete_user')}}</h4>
                @endif
                <h1 class="text-center">Quizzes</h1>
            </div>
            <div class="card-body">
                <a href="/admin/quiz/create"><button class="btn-primary">Create New Quiz</button></a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th scope="row">Id</th>
                            <th>Name</th>
                            <th>Course</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($quiz as $quizzes)
                            <tr>
                                <td>{{$quizzes->id}}</td>
                                <td><a href="/admin/quiz/{{$quizzes->id}}/edit"> {{$quizzes->name}}</a></td>
                                <td>{{$quizzes->course->name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
</body>
</html>
