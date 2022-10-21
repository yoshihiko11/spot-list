<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchPost(Post $post, Request $request)
    {
        $search = $request['search'];
        $posts = $post->search($search);
        return view('posts/index')->with(['posts' => $posts, 'search' => $search]);
    }
}
