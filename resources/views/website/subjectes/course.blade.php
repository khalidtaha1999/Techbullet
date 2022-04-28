<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/quizzes.css')}}">
</head>
<body>
   @include('include.header')
    <section class="quiz-courses">


        <div class="left-baner" style="background-image:url({{asset('images/baner-dec-left\ 11.png')}})"></div>
      <div class="right-baner" style="background-image: url({{asset('images/services-right-dec.png')}})"></div>
      <div class="courses-cont">

@foreach($course as $courses)
        <div class="course">
            <a href="/course/{{$courses->id}}"><img src="{{asset('images/'.$courses->image)}}"></a>
          <div class="image-info">
            <p>{{$courses->name}}</p>
          </div>
        </div>
          @endforeach
      </div>
    </section>
</body>
</html>
