<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['user_id', 'post_id'];

   public function user()
   {
       return $this->belongsTo('App\User');
   }

   public function post()
   {
       return $this->belongsTo('App\Post');
   }
   
    public function getRecomendedSpots(int $limit_count = 4)
    {
        return $this->post()->selectRaw('count(*) as count')->groupBy('post_id')->orderBy('count','desc')->limit($limit_count)->get();
    }
}
