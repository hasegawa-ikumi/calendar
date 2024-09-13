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
        {{-- <h1>Post Details</h1>
        <p>Post Title: {{ $post->title }}</p>

        <h2>Records for Date: {{ $year_id }}/{{ $month_id }}/{{ $day_id }}</h2>

        @if($records->isEmpty())
            <p>No records found for this date.</p>
        @else
            <ul>
                @foreach($records as $record)
                    <li>
                        <!-- データベースの各レコードの情報を表示 -->
                        Record ID: {{ $record->id }}<br>
                        Some Data: {{ $record->title }}<br>
                        Another Data: {{ $record->body }}
                        Another Data: {{ $record->image_url }}
                    </li>
                @endforeach
            </ul>
        @endif --}}
        <!--//自分のコード-->
        @if($post)
        <h1 class="title">
            {{ $post->title }}
        </h1>
        
            </div>
            <div class="body">
                     <p>{{ $post->body }}</p>   
                
            </div>
           
            <div>
                <img src="{{ $post->image_url }}" alt="画像が読み込めません。">
            </div>
              <div class='edit'>
            <a href="/posts/create/edit">編集</a>
        </div>
           <a href='/posts/create'></a>
                <form action="/posts/{{ $post->id}}" id="form_{{ $post->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deletePost({{ $post->id}})">削除</button>
                </form><!-- ここから追加 -->   <!-- ここまで追加 -->
        </div>
        @else
        <p>データがありません</p>
        @endif
        <div class="footer">
            <a href="/">戻る</a>
        </div>
          <script>
            function deletePost(id){
                'use strict'
                
                if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>