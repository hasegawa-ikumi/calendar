<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>{{$month}}月</h1>
        <div class='posts'>
            @foreach ($dates as $date )
                <a href="/posts/{{ $year }}/{{ $month }}/{{ $date }}">{{ $date }}日</a>
            @endforeach
                <a href='/create/{{$year}}/{{$month}}'>create</a>
            </div>
    </body>
</html>     