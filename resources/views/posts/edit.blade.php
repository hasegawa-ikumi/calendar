<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
           <div class="day">
             <h2>日付</h2>
             <select name="day">
            @foreach ($days as $day)
            @if($posts->contains('day_id',$day->id))
               <option value="{{ $day->id }}" disabled>{{ $day->day }}</option>
            @else
              <option value="{{$day->id }}">{{$day->day }}</option>
            @endif
            @endforeach
            <div class="title">
                <h3>Title</h3>
                <input type="text" name="post[title]" placeholder="タイトル" value={{ $post->title }} >
            </div>
            <div class="body">
                <h4>Body</h4>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <div class="image">
                <input type="file" name="image">
            </div>
            <input type="submit" value="edit"/>
        </form>
        <div class="footer">
            <a href="/posts{{ $post->id}}">戻る</a>
        </div>
    </body>
</html>