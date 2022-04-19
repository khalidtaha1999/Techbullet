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
          <a class="blog" href="/blog/{{$blogs->id}}">
            <img src="./images/{{$blogs->image}}" alt="blog">
            <div class="data">
              <div class="info-reading">
                <span>{{$blogs->created_at}}</span>
                <!-- <span class="space"></span> -->
                <span>Mazen Ziad</span>
              </div>
              <h4>{{$blogs->title}}</h4>
            </div>
          </a>
            @endforeach

        </div>
      </div>
      <div class="right-side">
        <div class="header">
          <h3>Random Blogs</h3>
        </div>
        <a href="#" class="blog">
          <div class="image-cont">
            <span>01</span>
            <img src="./images/older_posts_4.jpg" alt="blog">
          </div>
          <div class="text">
            <div class="info-reading">
              <span>Dec 5th 2021</span>
              <span class="space"></span>
              <span>Mazen Ziad</span>
            </div>
            <h3>Nice Building</h3>
          </div>
        </a>
        <a href="#" class="blog">
          <div class="image-cont">
            <span>02</span>
            <img src="./images/older_posts_4.jpg" alt="blog">
          </div>
          <div class="text">
            <div class="info-reading">
              <span>Dec 5th 2021</span>
              <span class="space"></span>
              <span>Mazen Ziad</span>
            </div>
            <h3>Nice Building</h3>
          </div>
        </a>
        <a href="#" class="blog">
          <div class="image-cont">
            <span>03</span>
            <img src="./images/older_posts_4.jpg" alt="blog">
          </div>
          <div class="text">
            <div class="info-reading">
              <span>Dec 5th 2021</span>
              <span class="space"></span>
              <span>Mazen Ziad</span>
            </div>
            <h3>Nice Building</h3>
          </div>
        </a>
        <a href="#" class="blog">
          <div class="image-cont">
            <span>04</span>
            <img src="./images/older_posts_4.jpg" alt="blog">
          </div>
          <div class="text">
            <div class="info-reading">
              <span>Dec 5th 2021</span>
              <span class="space"></span>
              <span>Mazen Ziad</span>
            </div>
            <h3>Nice Building</h3>
          </div>
        </a>
        <a href="#" class="blog">
          <div class="image-cont">
            <span>05</span>
            <img src="./images/older_posts_4.jpg" alt="blog">
          </div>
          <div class="text">
            <div class="info-reading">
              <span>Dec 5th 2021</span>
              <span class="space"></span>
              <span>Mazen Ziad</span>
            </div>
            <h3>Nice Building</h3>
          </div>
        </a>
      </div>
    </div>
  </section>
</body>
</html>
