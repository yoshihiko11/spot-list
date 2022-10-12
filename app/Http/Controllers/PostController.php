<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //Controllerからviewにデータが渡るようにする($postでデータ受け渡し)
    //ページ設定
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    public function create()
    {
        return view('posts/create');
    }
    
    public function store(Post $post, PostRequest $request)
    {
        $image = $request->file('image');
        // バケットの`example`フォルダへアップロードする
        $path = Storage::disk('s3')->putFile('example', $image, 'public');
        // アップロードした画像のフルパスを取得
        $imagePath = Storage::disk('s3')->url($path);
        
        $input = $request['post'];
        $input['image'] = $imagePath;
        $input['user_id'] = Auth::id();
        $post->fill($input)->save();
        
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
    $post->delete();
    return redirect('/');
    }
}
?>