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
        <h1 class="day_id">
            {{ $post->title }}
        </h1>
        <div>
             <h2>2024</h2>
        <div class='posts'>
          <h3>{{$day}}日</h3>
            @foreach ($dates as $date )
                <a href="/posts/{{ $year }}/{{ $month }}/{{ $date }}">{{ $date }}日</a>
            @endforeach
            <div>
                <h4>day_id</h4>
                <p>{{ $post->body }}</p>    
            </div>
            <!-- ここから追加 -->
            <div>
                <img src="{{ $post->image_url }}" alt="画像が読み込めません。">
                <input type="submit" value="保存"/>
            </div>
            <!-- ここまで追加 -->
        </div>
        <div class="footer">
            <a href='/posts/create'>戻る</a>
        </div>
    </body>
</html>