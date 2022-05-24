<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@include('admin.index')
<div  class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            @if(Session::has('create_blog'))
                <h4 class="alert-success text-center">{{session('create_blog')}}</h4>
            @endif
            @if(Session::has('update_blog'))
                <h4 class="alert-success text-center">{{session('update_blog')}}</h4>
            @endif
            @if(Session::has('delete_blog'))
                <h4 class="alert-danger text-center">{{session('delete_blog')}}</h4>
            @endif
            <h1 class="text-center">Blogs</h1>
        </div>
        <div class="card-body">
            <a href="/admin/blog/create"><button class="btn-primary">Create New Blog</button></a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Username</th>
                        <th>pending</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($blog as $blogs)

                        <tr>
                            <td>{{$blogs->id}}</td>
                            <td><img width="100px" src="/images/{{$blogs->image}}" alt=""></td>
                            <td><a href="/admin/blog/{{$blogs->id}}/edit">{{$blogs->title}}</a></td>
                            @if($blogs->user)
                            <td>{{$blogs->user->name}}</td>
                            @else
                                <td>User</td>
                            @endif

                            <td><a href="/admin/blog/{{$blogs->id}}"> @if($blogs->pending==0) Approve @endif </a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
