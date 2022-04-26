<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
   <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
  <script src="./header.js" defer></script>
</head>
<body>
@include('include.header')


  <!-- Recent Blogs -->


  <section class="recent-cont">
    <div class="left-banner">
      <img src="./images/portfolio-left-dec.png" alt="banner">
    </div>
    <div class="right-banner">
      <img src="./images/services-left-dec.png" alt="banner">
    </div>
    <div class="recent-blogs-section grid">
      <div class="left-side">
        <div class="header-text">
          <div class="recent-border">
            <p>Recent Blogs</p>
          </div>
          <div class="text">
            <p>The Recent Blogs We Have.</p>
          </div>
        </div>
        <div class="recent-blogs-container grid">
            @foreach($blog as $blogs)
                @if($blogs->pending===1)

                <a class="blog" href="/blog/{{$blogs->id}}">
            <img src="./images/{{$blogs->image}}" alt="blog">
            <div class="data">
              <div class="info-reading">
                <span>{{$blogs->created_at->format('d/m/Y')}}</span>
                <!-- <span class="space"></span> -->
                <span>{{$blogs->user->name}}</span>
              </div>
              <h4>{{$blogs->title}}</h4>
            </div>
          </a>
                @endif
            @endforeach

        </div>
      </div>
      <div class="right-side">
        <div class="header">
          <h3>Random Blogs</h3>
        </div>
          <?php
          $i=1;
          ?>
          @foreach($Rblog as $Rblogs)
              @if($blogs->pending===1)
        <a href="/blog/{{$Rblogs->id}}" class="blog">
          <div class="image-cont">

            <span>{{$i++}}</span>
            <img src="./images/{{$Rblogs->image}}" alt="blog">
          </div>
          <div class="text">
            <div class="info-reading">
              <span>{{$Rblogs->created_at->format('d/m/Y')}}</span>
              <span class="space"></span>
              <span>{{$Rblogs->user->name}}</span>
            </div>
            <h3>{{$Rblogs->title}}</h3>
          </div>
        </a>
              @endif
          @endforeach



      </div>
    </div>
  </section>
</body>
</html>
