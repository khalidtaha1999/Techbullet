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

                @if(Session::has('update_question'))
                    <h4 class="alert-success text-center">{{session('update_question')}}</h4>
                @endif
                @if(Session::has('delete_question'))
                    <h4 class="alert-danger text-center">{{session('delete_question')}}</h4>
                @endif
                <h1 class="text-center">Questions</h1>
            </div>
            <div class="card-body">
                <a href="/admin/question/create"><button class="btn-primary">Create New Question</button></a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th scope="row">Id</th>

                            <th>Questions</th>
                            <th>Quizzes</th>
                            <th>Points</th>
                            <th>Answers</th>
                            <th>Correct Answers</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($question as $questions)
                            <tr>
                                <td>{{$questions->id}}</td>
                                <td><a href="/admin/question/{{$questions->id}}/edit"> {{$questions->title}}</a></td>
                                @if ($questions->quiz)
                                    <td>{{$questions->quiz->name}}</td>
                                @endif

                                <td>{{$questions->point}}</td>
                                <td>
                                   <strong style="display: inline-block;color: blue;font-weight: bolder"> Option A :</strong> {{ $questions->option_a}}
                                    <br>
                                    <strong style="display: inline-block;color: blue;font-weight: bolder"> Option B :</strong>     {{$questions->option_b}}
                                    <br>
                                    <strong style="display: inline-block;color: blue;font-weight: bolder"> Option C :</strong>     {{$questions->option_c}}
                                    <br>
                                    <strong style="display: inline-block;color: blue;font-weight: bolder"> Option D :</strong>   {{$questions->option_d}}
                                </td>

                                <td>{{$questions->correct_answer}}</td>
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
