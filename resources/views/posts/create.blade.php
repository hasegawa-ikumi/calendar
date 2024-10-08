<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            
           <div class="day">  
           <input type='hidden' value="{{$year}}" name="post[year_id]"/>
             <h2>日付</h2>
             <input type='hidden' value="{{$month->id }}" name="post[month_id]"/>{{$year+2019}}年{{$month->month}}
             <select name="post[day_id]">
            @foreach ($days as $day)
            @if($posts->contains('day_id',$day->id))
               <option value="{{ $day->id }}" disabled name="post[day_id]">{{ $day->day }}</option>
            @else
              <option value="{{$day->id }}" name="post[day_id]">{{$day->day }}</option>
            @endif
            @endforeach
            <div class="title">
                <h3>Title</h3>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h4>Body</h4>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <div class="image">
                <input type="file" name="image">
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>