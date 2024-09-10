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
          @for($i= 2020; $i < 2027; $i++)
             <a href="/index/{{ $i }}">{{ $i }}年</a>
            @endfor
        </div>
    
    </body>
</html>     