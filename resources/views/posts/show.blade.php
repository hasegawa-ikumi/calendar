<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div>
            <div>
                <h3></h3>
                <p>{{ $post->body }}</p>    
            </div>
            <!-- ここから追加 -->
            <div>
                <img src="{{ $post->image_url }}" alt="画像が読み込めません。">
            </div>
            <!-- ここまで追加 -->
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>