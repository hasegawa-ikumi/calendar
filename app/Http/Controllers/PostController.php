<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\titles;
use App\Models\bodys;
use App\Models\image_url;
use Cloudinary;
use App\Models\Year;
use App\Models\Month;
use App\Models\Day;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
     public function yearIndex(Post $post)
    {

       // return view('posts.yearIndex');
       return view('posts.yearIndex')->with(['posts' => $post]);
    }
    
    

    public function index(Post $post, $year)
    {
        return view('posts.index')->with(['year' => $year]);
        //return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]); 
    }
    
    
    public function create(Post $post, $year, $month,Day $day)
    {
      
        if($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12){
            $days = $day->whereBetween('day', [1,31])->get();  
        }elseif($month == 4 || $month == 6 || $month == 9 || $month == 11){
            $days = $day->whereBetween('day', [1,30])->get();
        }elseif($month == 2 && $year%4 == 1){
            $days = $day->whereBetween('day', [1,29])->get();
        }elseif($month == 2 && $year%4 != 1){
            $days = $day->whereBetween('day', [1,28])->get();
        }
        
        $year=$year-2019;
        
        $posts = $post->where('year_id', $year)->where('month_id', $month)->get();
        $month_0= Month::where('id',$month)->get();
        $month=$month_0[0];
        return view('posts.create')->with(['days' => $days, 'month' => $month, 'year' => $year,'posts'=> $posts]);
    }

    public function store(Request $request, Post $post)
    {

        $input = $request['post'];  //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
       // $input = $request['day']; 
        //$input['user_id']=Auth::id();
        
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
//dd($request);
        $input += ['image_url' => $image_url];  
   

        $month_id = request()->query('month_id');
        $year_id = request()->query('year_id'); 
        $day_id = request()->query('day_id');
        
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id . '?month_id=' . $month_id . '&year_id=' . $year_id . '&day_id=' . $day_id);
        //return redirect('/posts/', $post->id,$month_id,$year_id,$day_id);
        // postsの情報を増やした
        
    }
    
    public function show(Post $post)
    {
    
        $month_id = request()->query('month_id'); 
        $year_id = request()->query('year_id'); 
        $day_id = request()->query('day_id');
        $records = DB::table('posts')
            ->where('month_id', $month_id) 
            ->where('year_id', $year_id) 
            ->where('day_id', $day_id) 
            ->get();
            
            // $month_id=$month;
        //$year_id=$year;
        //$day_id=$date;
        
        return view('/posts/show')->with([
            'post' => $post,
            'month_id' => $month_id, 
            'year_id' => $year_id, 
            'day_id' => $day_id,
        ]);
    }
    
    public function show2(Post $post,$year,$month,$date)

    {
        // $month_id = request()->query('month_id'); 
        // $year_id = request()->query('year_id'); 
        // $day_id = request()->query('day_id');
        // $records = DB::table('posts')
        //     ->where('month_id', $month_id) 
        //     ->where('year_id', $year_id) 
        //     ->where('day_id', $day_id) 
        //     ->get();
        $month_id=$month;
        $year_id=$year-2019;
        $day_id=$date;
       $post=DB::table('posts')   
            ->where('month_id', $month_id) 
            ->where('year_id', $year_id) 
            ->where('day_id', $day_id) 
            ->get();
    
        if (empty($post[0])){
            $post=null;}
        
            else{
                $post=$post[0];
            }
    
          
        return view('/posts/show')->with([
            'post' => $post,
            // 'month_id' => $month_id, 
            // 'year_id' => $year_id, 
            // 'day_id' => $day_id,
        ]);
    }
    
    public function month ($year, $month){
        if($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12){
            $dates = range(1,31);
        }elseif($month == 4 || $month == 6 || $month == 9 || $month == 11){
            $dates = range(1,31);
        }elseif($month == 2 && $year/4 == 1){
            $dates = range(1,29);
        }elseif($month == 2 && $year/4 != 1){
            $dates = range(1,28);
        }
        
        return view('posts.month')->with(['year' => $year, 'month' => $month, 'dates' => $dates]);
    }
   
    public function day(Post $post, $year,$month,$day)
    {
        $post->where('year_id', $year)->where('month_id', $month)->where('day_id', $day)->get();
        return view('posts.show')->with(['post' => $post]);
    }
    
    public function edit(Post $post)
    {
        return view('/posts/create')->with(['post' => $post]);
    }

    public function delete(Post $post)
    {
        $year = $post['year_id'];
        $month = $post['month_id'];
        
        $post->delete();
        //return redirect('/index/$year/$month')->with(['post' => $post]);
        return redirect()->route('month', [
            'year' => $year,
            'month' => $month,
        ])->with(['post' => $post]);
    }
}
