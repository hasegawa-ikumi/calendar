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
          <h2>2024年</h2>
          @for($i= 1; $i < 13; $i++)
             <a href="/index/1/{{ $i }}">{{ $i }}月</a>
            @endfor
                
            </div>
            <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>     