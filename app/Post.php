<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    protected $fillable = [
        'name',
        'address',
        'access',
        'body',
        'price',
        'sales',
        'hpurl',
        'user_id',
        'image',
        ];
    
    public function getPaginateByLimit(int $limit_count = 9)
    {
        //updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
   
    public function isLiked($user_id)
    {
        //すでにいいねしているかどうかを判断するのに使用する
        return $this->likes()->where('user_id', $user_id)->exists();
    }
    
    public function likes()
   {
       return $this->hasMany('App\Like');
   }
   
    public function getLike($user_id)
   {
       return $this->likes()->where('user_id', $user_id)->get();
   }

    public function search($word)
    {
        $posts = DB::table('posts')
            ->from('posts')
            ->where('name',  'like', "%$word%")
            ->orWhere('body', 'like', "%$word%")
            ->paginate(9);
            
        return $posts;
    }
}
