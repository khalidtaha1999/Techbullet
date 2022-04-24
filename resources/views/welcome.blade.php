<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tech Bullet</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/brands.min.css" integrity="sha512-rQgMaFKZKIoTKfYInSVMH1dSM68mmPYshaohG8pK17b+guRbSiMl9dDbd3Sd96voXZeGerRIFFr2ewIiusEUgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="header.js" defer></script>
    <script src="project bau.js" defer></script>
</head>
<body>
<!-- <section id="navBar" class="nav-bar">
  <h2>Tech <span style="color: #ff695f">Bullet</span></h2>
  <div>
    <a href="">home</a>
    <a href="">about</a>
    <a href="quizez.html">subjects</a>
    <a href="./anauncement.html">announcements</a>
     <a href="./blog.html">blog</a>
  </div>

  <a href="log in.html" ><button>log in</button></a>
</section> -->

@include('include.header')

<section class="landing-info">
    <div class="left-baner" style="background-image: url('{{asset('images/baner-dec-left\ 11.png')}}')">
    </div>
    <div class="container">
        <div class="text-slider">
            <div class="info-cont">
                <p>Some Text</p>
                <h1><span style="color: #03a4ed;">Tech</span> <span style="color: #ff695f;">Bullet</span> for your study</h1>
                <div class="text-div">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ratione doloribus ad, dolores maiores fuga autem deserunt alias commodi. Amet!</p>
                </div>
                <a href="#">More</a>
            </div>
            <!-- <div class="slider-num">
                <span>1</span>
                <span>2</span>
            </div> -->
        </div>
    </div>
    <div class="right-baner" style="background-image: url('{{asset('images/banner-right-image11.png')}}')" ></div>
</section>

@include('include.footer')


</body>
</html>
