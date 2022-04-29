<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <link rel="stylesheet" href="{{asset('css/quizpage.css')}}">
    <script src="header.js" defer></script>
    <script src="{{asset('js/quizpage.js')}}" defer></script>
</head>
<body>
@include('include.header')
<section class="quiz-name">
    <h2>{{$quiz->name}}</h2>
</section>
<section class="quiz-section">
    <div class="subject-redirect">
        <h3>To Study More About {{$quiz->course->name}}</h3>
        <a href="/course/{{$quiz->course->id}}">Click Here</a>
    </div>
    <div class="animation">
        <div><img src="{{asset('images/services-right-dec.png')}}"></div>
    </div>
    <div class="quiz-container">
        <form id="quiz-form">
            <?php
            $i=0;
            $a=1;
            ?>
            @foreach($question as $questions)
            <div class="quiz" answer="{{$questions->correct_answer}}">
                <h3>{{$questions->title}}</h3>
                <div id="c++_1">
                    <div>
                        <input id="c++_1_{{$a}}" type="radio" name="q{{$i}}">
                        <label for="c++_1_{{$a}}">{{$questions->option_a}}</label>
                    </div>
                    <?php
                    $a++;
                ?>
                    <div>
                        <input id="c++_1_{{$a}}" type="radio" name="q{{$i}}">
                        <label for="c++_1_{{$a}}">{{$questions->option_b}}</label>
                    </div>
                    <?php
                    $a++;
                ?>
                    @if($questions->option_c!=0)
                    <div>
                        <input id="c++_1_{{$a}}" type="radio" name="q{{$i}}">
                        <label for="c++_1_{{$a}}">{{$questions->option_c}}</label>
                    </div>
                    <?php
                    $a++;
                ?>
                    <div>
                        <input id="c++_1_{{$a}}" type="radio" name="q{{$i}}">
                        <label for="c++_1_{{$a}}">{{$questions->option_d}}</label>
                    </div>
                    @else
                    @endif
                </div>




                <?php
                    $a++;
                ?>
            </div>

                <?php
                    $i++;
                ?>
            @endforeach
            <div class="submit">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</section>
<div class="overlay hidden">
    <div class="card">
        <h2>Your Score is :</h2>
        <p><span id="true-answers"></span> / <span id="all-question"></span></p>
        <button class="close">close</button>
    </div>
</div>
</body>
</html>
