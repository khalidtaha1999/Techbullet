<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

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

            <?php
            $lastblog=\App\Models\Blog::orderBy('id','DESC')->take(3)->get()
            ?>
            <div class="recent-blogs-container grid">
                @foreach($lastblog as $lastblogs)
                    @if($lastblogs->pending===1)

                        <a class="blog" href="/blog/{{$lastblogs->id}}">
                            <img src="./images/{{$lastblogs->image}}" alt="blog">
                            <div class="data">
                                <div class="info-reading">
                                    <span>{{$lastblogs->created_at->format('d/m/Y')}}</span>
                                    <!-- <span class="space"></span> -->
                                    @if($lastblogs->user)
                                        <span>{{$lastblogs->user->name}}</span>
                                    @else
                                        <span>User</span>
                                    @endif

                                </div>
                                <h4>{{$lastblogs->title}}</h4>
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
                @if($lastblogs->pending===1)
                    <a href="/blog/{{$Rblogs->id}}" class="blog">
                        <div class="image-cont">

                            <span>{{$i++}}</span>
                            <img src="./images/{{$Rblogs->image}}" alt="blog">
                        </div>
                        <div class="text">
                            <div class="info-reading">
                                <span>{{$Rblogs->created_at->format('d/m/Y')}}</span>
                                <span class="space"></span>
                                @if($Rblogs->user)
                                    <span>{{$Rblogs->user->name}}</span>
                                @else
                                    <span>User</span>
                                @endif
                            </div>
                            <h4>{{$Rblogs->title}}</h4>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</section>
<section class="older-blogs">
    <h2>Older Blogs</h2>
    <div class="blogs-container">
        @foreach($blog as $blogs)
            <a href="/blog/{{$blogs->id}}" class="blog">
                <div class="right-side">
                    <img src="./images/{{$blogs->image}}">
                </div>
                <div class="left-side">
                    <div class="data">
                        <p>{{$blogs->created_at->format('d/m/Y')}}</p>
                        @if($blogs->user)
                            <p>{{$blogs->user->name}}</p>
                        @else
                            <span>User</span>
                        @endif
                    </div>
                    <div class="info">
                        <h4>{{$blogs->title}}</h4>
                        <p>{!! $blogs->body !!}</p>
                    </div>
                </div>
            </a>
        @endforeach
        <div class="row" style="margin-top: 40px;font-size: 18px">
            <div class="col text-center">
                <div class="text-center">{{$blog->links()}}</div>
            </div>
        </div>

    </div>
</section>

</body>
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</html>
