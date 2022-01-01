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
            @if(Session::has('create_ad'))
                <h4 class="alert-success text-center">{{session('create_ad')}}</h4>
            @endif
            @if(Session::has('update_ad'))
                <h4 class="alert-success text-center">{{session('update_ad')}}</h4>
            @endif
            @if(Session::has('delete_ad'))
                <h4 class="alert-danger text-center">{{session('delete_ad')}}</h4>
            @endif
            <h1 class="text-center">Advertisement</h1>
        </div>
        <div class="card-body">
            <a href="/admin/advertisement/create"><button class="btn-primary">Create New Advertisement</button></a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ad as $ads)
                        <tr>
                            <td>{{$ads->id}}</td>
                            <td><img width="100px" src="/images/{{$ads->image}}" alt=""></td>
                            <td><a href="/admin/advertisement/{{$ads->id}}/edit">{{$ads->title}}</a></td>
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
