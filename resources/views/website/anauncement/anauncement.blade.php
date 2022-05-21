<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/aniuncment.css')}}" />
    <title>Announcements</title>
</head>
<body>

@include('include.header')

<section class="anounments-conteners">
    <span> <img src="./images/services-left-dec.png" /></span>
    <img src="./images/portfolio-left-dec.png" />
    <div class="anouncments-yard">


@foreach($anauncement as $anauncements)
        <div class="anouncments">
            <div class="anouncments-iner-div1">
                <img
                    src="{{asset('images/'.$anauncements->image)}}"
                />
            </div>
            <div class="anouncments-iner-div2">
                <h2>{{$anauncements->title}}</h2>
                <span> </span>
                <div style="max-height: 146px; overflow: hidden" class="backend-text">
                    <p>
                        {!! $anauncements->body !!}
                    </p>
                </div>
                
                <button class="read-button"><a href="/announcement/{{$anauncements->id}}">read more</a></button>
            </div>
        </div>
        @endforeach
    </div>
</section>
@include('include.footer')
</body>
</html>
