<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/solo_blog.css')}}" />
    <script
      src="https://kit.fontawesome.com/34b7512599.js"
      crossorigin="anonymous"
    ></script>
    <title>Announcements</title>
  </head>
  <body>
  @include('include.header')
    <section class="anounments-solo">
      <img src="{{asset('images/videos-left-dec.png')}}" alt="">
        <img src="{{asset('images/videos-right-dec.png')}}" alt="">
      <div class="anouncement">
        <h1>{{$anauncements->title}}</h1>
        <i class="fa-regular fa-clock"><span>{{$anauncements->created_at->format('d/m/Y')}}</span></i>
        <br />
        <img src="{{asset('images/'.$anauncements->image)}}" alt="" />
        <p >
          {!! $anauncements->body !!}
        </p>
      </div>
      <ul class="other-anouncements">
          @foreach($Ranauncement as $Ranauncements)
        <li class="single-li">
          <h3>{{$Ranauncements->title}}</h3>
          <img src="{{asset('images/'.$Ranauncements->image)}}" alt="">
          <i class="fa-regular fa-clock"><span>{{$Ranauncements->created_at->format('d/m/Y')}}</span></i>
        <button><a href="/announcement/{{$Ranauncements->id}}">Read</a></button>
        </li>
          @endforeach
      </ul>
    </section>
  </body>
</html>
