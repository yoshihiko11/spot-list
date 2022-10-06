@extends('layouts.app')

@section('content')
    <h1 class="title">新規観光スポット登録</h1>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="name">
            <h2>観光スポット名</h2>
            <input type="text" name="post[name]" placeholder="観光スポット名" value="{{ old('post.name') }}"/>
            <p class="name_error" style="color:red">{{ $errors->first('post.name') }}</p>
        </div>
        <div class="address">
            <h2>住所</h2>
            <textarea name="post[address]" placeholder="住所">{{ old('post.address') }}</textarea>
            <p class="name_error" style="color:red">{{ $errors->first('post.address') }}</p>
        </div>
        <div class="access">
            <h2>アクセス</h2>
            <textarea name="post[access]" placeholder="アクセス">{{ old('post.access') }}</textarea>
            <p class="name_error" style="color:red">{{ $errors->first('post.access') }}</p>
        </div>
        <div class="body">
            <h2>観光スポット説明</h2>
            <textarea name="post[body]" placeholder="観光スポット説明">{{ old('post.body') }}</textarea>
            <p class="name_error" style="color:red">{{ $errors->first('post.body') }}</p>
        </div>
        <div class="price">
            <h2>料金</h2>
            <input type="tel" name="post[price]" placeholder="1500" value="{{ old('post.price') }}">円
            <p class="name_error" style="color:red">{{ $errors->first('post.price') }}</p>
        </div>
        <div class="sales">
            <h2>営業時間</h2>
            <textarea name="post[sales]" placeholder="営業時間">{{ old('post.sales') }}</textarea>
            <p class="name_error" style="color:red">{{ $errors->first('post.sales') }}</p>
        </div>
        <div class="hpurl">
            <h2>観光スポットホームページURL</h2>
            <textarea name="post[hpurl]" placeholder="観光スポットホームページURL">{{ old('post.hpurl') }}</textarea>
            <p class="name_error" style="color:red">{{ $errors->first('post.hpurl') }}</p>
        </div>
        <div class="posts">
            <h2>観光スポット写真</h2>
            <input type="file" name="image">
        </div>
        <input  class="btn btn-outline-dark mt-auto" type="submit" value="登録">
    </form>
    <div class="d-flex">
        <a class="btn btn-outline-dark flex-shrink-0" type="button" href="/">一覧に戻る</a>
    </div>
@endsection    