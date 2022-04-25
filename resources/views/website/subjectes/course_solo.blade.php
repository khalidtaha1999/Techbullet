<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject</title>
    <link rel="stylesheet" href="{{asset('css/subject.css')}}">

</head>
<body>
@include('include.header')
<section class="subject">
    <div class="left-image">
        <img src="{{asset('images/contact-left-dec.png')}}" alt="image">
    </div>
    <div class="right-image">
        <img src="{{asset('images/contact-dec.png')}}" alt="image">
    </div>
    <h2>{{$course->name}}</h2>
    <div class="info-cont">
        <!-- <div class="slides-cont"> -->
        <div class="slides">
            <h2 class="slides-h2">Slides</h2>
            <ul>
                @foreach($slide as $slides)
                <li><a href="/course/{{$slides->id}}/edit" class="slide">{{$slides->name}}</a></li>
                @endforeach
            </ul>
        </div>
        <!-- </div> -->
        <div class="quiz-section">
            <h2 class="quiz-h2">Quizzes</h2>
            <ul>
                @foreach($quiz as $quizzes)
                <li><a href="/quiz/{{$quizzes->id}}" class="quiz">{{$quizzes->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

</section>
</body>
</html>
