@extends('layouts.app')

@section('content')
    <h1 class='title'>観光スポット情報編集</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="name">
                <h2>観光スポット名</h2>
                <input type="text" name="post[name]" value="{{ $post->name }}">
            </div>
            <div class="address">
                <h2>住所</h2>
                <textarea name="post[address]" placeholder="住所">{{ $post->address }}</textarea>
            </div>
            <div class="access">
                <h2>アクセス</h2>
                <textarea name="post[access]" placeholder="アクセス">{{ $post->access }}</textarea>
            </div>
            <div class="body">
                <h2>観光スポット説明</h2>
                <textarea name="post[body]" placeholder="観光スポット説明">{{ $post->body }}</textarea>
            </div>
            <div class="price">
                <h2>料金</h2>
                <input type="text" name="post[price]" value="{{ $post->price }}">円
            </div>
            <div class="sales">
                <h2>営業時間</h2>
                <textarea name="post[sales]" placeholder="営業時間">{{ $post->sales }}</textarea>
            </div>
            <div class="hpurl">
                <h2>観光スポットホームページURL</h2>
                <textarea name="post[hpurl]" placeholder="観光スポットホームページURL">{{ $post->hpurl }}</textarea>
            </div>
        <div class="posts">
            <h2>観光スポット写真</h2>
            <input type="file" name="image" value="{{ $post->image }}">
        </div>
        <input class="btn btn-outline-dark mt-auto" type="submit" value="保存">
        </form>
            
    </div>
    <div class="d-flex">
        <a class="btn btn-outline-dark flex-shrink-0" type="button" href="/">一覧に戻る</a>
    </div>
    
@endsection  