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

  <template id="temp">
      <div class="background-overlay"></div>
      <div class="overlay">
        <button id="exit-button">x</button>
        <img
          src="images/62-624574_students-png-images-hd-transparent-png.png"
        />
        <div>
          <h2>Demo Title</h2>
          <p>
            Create a professional free website template. Responsive, fully
            customizable with easy Drag-n-Drop Nicepage editor. Adjust colors,
            fonts, header and footer, layout and other design elements, as well
            as content and images. Create a professional free website template.
            Responsive, fully customizable with easy Drag-n-Drop Nicepage
            editor.
          </p>
        </div>
      </div>
    </template>
    <section id="navBar" class="nav-bar">
      <h2>Tech <span style="color: #ff695f">Bullet</span></h2>
      <div>
        <a href="">home</a>
        <a href="">about</a>
        <a href="quizez.html">subjects</a>
        <a href="">announcements</a>
      </div>

      <a href="log in.html"><button>log in</button></a>
    </section>
    <section class="anounments-solo">
      <img src="{{asset('images/videos-left-dec.png')}}" alt="">

        <img src="{{asset('images/videos-right-dec.png')}}" alt="">
      <div class="anouncement">



        <h1>{{$blog->title}}</h1>
        <i class="fa-regular fa-clock"><span>{{$blog->created_at}}</span></i>
        <i class="fa-regular fa-user"><span>mohammad hamad</span></i>

        <br />
        <img src="{{asset('images/'.$blog->image)}}" alt="" />
        <p >
          {{$blog->body}}
        </p>
      </div>




      <ul class="other-anouncements">
        <li class="single-li">

          <h3>Making Money Online with Your Computer Only</h3>
          <img src="images/older_posts_4.jpg" alt="">
          <i class="fa-regular fa-user"><span>mohammad hamad</span></i>
          <i class="fa-regular fa-clock"><span>apr 1,2022</span></i>
        <button>Read</button>
        </li>
        <li class="single-li">

          <h3>Making Money Online with Your Computer Only</h3>
          <img src="images/older_posts_4.jpg" alt="">
          <i class="fa-regular fa-user"><span>mohammad hamad</span></i>
          <i class="fa-regular fa-clock"><span>apr 1,2022</span></i>
        <button>Read</button>
        </li>
        <li class="single-li">

          <h3>Making Money Online with Your Computer Only</h3>
          <img src="images/older_posts_4.jpg" alt="">
          <i class="fa-regular fa-user"><span>mohammad hamad</span></i>
          <i class="fa-regular fa-clock"><span>apr 1,2022</span></i>
        <button>Read</button>
        </li>




      </ul>
    </section>
  </body>
</html>
