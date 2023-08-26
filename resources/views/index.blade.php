<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        @if (Session::has('message'))
            <div class="alert alert-warning">
                <p class="alert">{!! Session::get('message') !!}</p>
            </div>
        @endif
        <h2>Post List</h2>
        <form action="{{route('user.logout')}}" method="post">
            @csrf
            <button>Log out</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Authers Name</th>
                    <th>Posts</th>
                    <th>Comments</th>
                    <th>Tags</th>
                </tr>
            </thead>
            <tbody>
                @if ($posts)
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->post}}</td>
                    <td>{{$post->comments_count}}</td>
                    <td>{{$post->tags->pluck('tag_name')->implode(', ')}}</td>
                </tr>
                @endforeach
                @endif

            </tbody>
        </table>
        {!! $posts->links() !!}
    </div>

</body>

</html>
