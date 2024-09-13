<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>目次</h1>
        <div class='posts'>
          <h2>{{$year}}年</h2>
          @for($i= 1; $i < 13; $i++)
             <a href="/index/{{$year}}/{{ $i }}">{{ $i }}月</a>
            @endfor
    
        </div>
    
    </body>
</html>     