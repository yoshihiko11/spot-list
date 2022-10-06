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
                <input type="text" name="post[address]" value="{{ $post->address }}">
            </div>
            <div class="access">
                <h2>アクセス</h2>
                <input type="text" name="post[access]" value="{{ $post->access }}">
            </div>
            <div class="body">
                <h2>観光スポット説明</h2>
                <input type="text" name="post[body]" value="{{ $post->body }}">
            </div>
            <div class="price">
                <h2>料金</h2>
                <input type="text" name="post[price]" value="{{ $post->price }}">
            </div>
            <div class="sales">
                <h2>営業時間</h2>
                <input type="text" name="post[sales]" value="{{ $post->sales }}">
            </div>
            <div class="hpurl">
                <h2>観光スポットホームページURL</h2>
                <input type="text" name="post[hpurl]" value="{{ $post->hpurl }}">
            </div>
        <!--<div class="posts">
            <h2>観光スポット写真</h2>
            <input type="file" name="image" value="{{ $post->image }}">
        </div>-->
        <input class="btn btn-outline-dark mt-auto" type="submit" value="保存">
        </form>
            
    </div>
    <div class="d-flex">
        <a class="btn btn-outline-dark flex-shrink-0" type="button" href="/">一覧に戻る</a>
    </div>
    
@endsection  