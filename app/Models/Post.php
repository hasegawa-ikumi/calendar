<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function getPaginateByLimit(int $limit_count = 10)
{
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
    
    public function category()
{
    return $this->belongsTo(Category::class);
    
} 
    protected $fillable =[
        'image_url', 
        'year_id',
        'month_id',
        'day_id',
        'user_id',
    ];

}
