<?php

namespace App\Http\Controllers;

use App\Post;
use App\Like;
use Auth;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Post $post)
    {
               
        $user = Auth::user();

       
            if($post->isLiked(Auth::id())) {
                // 対象のレコードを取得して、削除する。
                $delete_record = $post->getLike($user->id);
                 \Log::debug($delete_record);
                Like::destroy($delete_record[0]->id);
            } else {
                $like = Like::firstOrCreate(
                    array(
                        'user_id' => Auth::user()->id,
                        'post_id' => $post->id
                    )
                );
           }
       
   }
   
   public function check(Post $post)
   {

        $like = $post->isLiked(Auth::id());
        return response()->json(['like' => $like], 200);
   }
}
