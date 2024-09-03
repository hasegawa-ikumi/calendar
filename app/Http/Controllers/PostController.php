<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cloudinary;
use App\Models\year;
use App\Models\months;
use App\Models\days;

class PostController extends Controller
{

    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);  
        
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }

    
    public function create(Post $post,year $year, months $month, days $day)
    {
        if($month->id == 1 || $month->id == 3 || $month->id == 5 || $month->id == 7 || $month->id == 8 || $month->id == 10 || $month->id == 12){
        $days = $day->whereBetween('day', [1,31])->get();
        }elseif($month->id == 4 || $month->id == 6 || $month->id == 9 || $month->id == 11){
        $days = $day->whereBetween('day', [1,30])->get();
        }elseif($month->id == 2 && $year->id%4 == 1){
        $days = $day->whereBetween('day', [1,29])->get();
        }elseif($month->id == 2 && $year->id%4 != 1){
        $days = $day->whereBetween('day', [1,28])->get();}
        $posts = $post->where('year_id', $year->id)
        ->where('month_id', $month->id)
        ->get();
    return view('posts.create')->with(['days' => $days, 'month' => $month, 'year' => $year,'posts'=> $posts]);
   }

    public function store(Request $request, Post $post)
    {
        //dd($request);

        $input = $request['post'];  //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
     
        $month=$month_id=1;
        
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();

        $input = $request['post'];
        $input += ['image_url' => $image_url];  
        
        $month_id=1;
        $year_id=1;
        $day_id=1;
        $user_id=1;
    
        $input += ['year_id' => $year_id];
        $input += ['month_id' => $month_id];  
        $input += ['day_id' => $day_id];  
        $input += ['user_id' => $user_id];  
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
        public function show(Post $post)
    {
        return view('/posts/show')->with(['post' => $post]);
    }
    public function month ($year, $month){
         if($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12){
       $dates = range(1,31);
        }elseif($month == 4 || $month == 6 || $month == 9 || $month == 11){
        $dates = range(1,31);
        }elseif($month == 2 && $year/4 == 1){
        $dates = range(1,29);
        }elseif($month == 2 && $year/4 != 1){
        $dates = range(1,28);}
        return view('posts.month')->with(['year' => $year, 'month' => $month, 'dates' => $dates]);
   }
   public function day(Post $post, $year,$month,$day)
   {
         $post->where('year_id', $year)
         ->where('month_id', $month)
         ->where('day_id', $day)
         ->get();
    return view('posts.show')->with(['post' => $post]);

}



}
