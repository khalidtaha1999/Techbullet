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
    <h2>C++ Quiz</h2>
</section>
<section class="quiz-section">
    <div class="subject-redirect">
        <h3>To Study More About C++</h3>
        <a href="#">Click Here</a>
    </div>
    <div class="animation">
        <div><img src="{{asset('images/services-right-dec.png')}}"></div>
    </div>
    <div class="quiz-container">
        <form id="quiz-form">
            @foreach($question as $questions)
            <div class="quiz">
                <h3>{{$questions->title}}</h3>
                <div id="c++_1">
                    <div>
                        <input id="c++_1_1" type="radio" name="q1" answer="1">
                        <label for="c++_1_1">{{$questions->option_a}}</label>
                    </div>
                    <div>
                        <input id="c++_1_2" type="radio" name="q1" answer="0">
                        <label for="c++_1_2">{{$questions->option_b}}</label>
                    </div>
                    <div>
                        <input id="c++_1_3" type="radio" name="q1" answer="0">
                        <label for="c++_1_3">{{$questions->option_c}}</label>
                    </div>
                    <div>
                        <input id="c++_1_4" type="radio" name="q1" answer="0">
                        <label for="c++_1_4">{{$questions->option_d}}</label>
                    </div>
                </div>
            </div>
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
