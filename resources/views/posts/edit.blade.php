@extends('layouts.app')

@section('content')
    <h1 class="title　text-center">観光スポット情報編集</h1>
    <div class="col-lg-10 container">
        <div class="bg-lightgray">
            <form action="/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!--スポット名修正-->
                <div class="col-lg-5 container">
                    <div class="name card mb-4">
                        <h3 class="card-header">観光スポット名</h3>
                        <div class="card-body-2">
                            <input class="box-size" autocomplete="off" type="text" name="post[name]" value="{{ $post->name }}" placeholder="観光スポット名">
                            <div class="name_error" style="color:red">{{ $errors->first('post.name') }}</div>
                        </div>
                    </div>
                </div>
                <!--住所修正-->
                <div class="col-lg-5 container">
                    <div class="address card mb-4">
                        <h3 class="card-header">住所</h3>
                        <div class="card-body-2">
                            <textarea class="box-size" autocomplete="off" name="post[address]" placeholder="住所">{{ $post->address }}</textarea>
                            <div class="name_error" style="color:red">{{ $errors->first('post.address') }}</div>
                        </div>    
                    </div>
                </div>
                <!--アクセス修正-->
                <div class="col-lg-5 container">
                    <div class="access card mb-4">
                        <h3 class="card-header">アクセス</h3>
                        <div class="card-body-2">
                            <textarea class="box-size" autocomplete="off" name="post[access]" placeholder="アクセス">{{ $post->access }}</textarea>
                            <div class="name_error" style="color:red">{{ $errors->first('post.access') }}</div>
                        </div>
                    </div>
                </div>
                <!--観光スポット説明修正-->
                <div class="col-lg-5 container">
                    <div class="body card mb-4">
                        <h3 class="card-header">観光スポット説明</h3>
                        <div class="card-body-2">
                            <textarea class="box-size" autocomplete="off" name="post[body]" placeholder="観光スポット説明">{{ $post->body }}</textarea>
                            <div class="name_error" style="color:red">{{ $errors->first('post.body') }}</div>
                        </div>
                    </div>
                </div>
                <!--料金修正-->
                <div class="col-lg-5 container">
                    <div class="price card mb-4">
                        <h3 class="card-header">料金</h3>
                        <div class="card-body-2">
                            <input type="text" class="box-size2" autocomplete="off" name="post[price]" value="{{ $post->price }}" placeholder="1500">円
                            <div class="name_error" style="color:red">{{ $errors->first('post.price') }}</div>
                        </div>
                    </div>
                </div>
               <!--営業時間修正-->
                <div class="col-lg-5 container">
                    <div class="sales card mb-4">
                        <h3 class="card-header">営業時間</h3>
                        <div class="card-body-2">
                            <textarea class="box-size" autocomplete="off" name="post[sales]" placeholder="営業時間">{{ $post->sales }}</textarea>
                             <div class="name_error" style="color:red">{{ $errors->first('post.sales') }}</div>
                        </div>
                    </div>
                </div>
                <!--観光スポットホームページURL修正-->
                <div class="col-lg-5 container">
                    <div class="hpurl card mb-4">
                        <h3 class="card-header">観光スポットホームページURL</h3>
                        <div class="card-body-2">
                            <textarea class="box-size" autocomplete="off" name="post[hpurl]" placeholder="観光スポットホームページURL">{{ $post->hpurl }}</textarea>
                            <div class="name_error" style="color:red">{{ $errors->first('post.hpurl') }}</div>
                        </div>
                    </div>
                </div>
                <!--観光スポット写真修正-->
                <div class="col-lg-5 container">
                    <div class="posts card mb-4">
                        <h3 class="card-header">観光スポット写真</h3>
                        <div class="card-body-2">
                            <input type="file" name="post[image]">
                            <div class="name_error" style="color:red">{{ $errors->first('post.image') }}</div>
                        </div>
                    </div>
                </div>
                <div class="btn-subscrib"><input class="subscribe btn-primary" type="submit" value="保存"></div>
            </form>
        </div>    
        <div class="d-flex">
            <a class="btn btn-outline-dark flex-shrink-0" type="button" href="/">一覧に戻る</a>
        </div>
    </div>
@endsection  