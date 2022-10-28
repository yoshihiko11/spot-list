@extends('layouts.app')

@section('content')
    <h1 class="title text-center">新規観光スポット登録</h1>
    <div class="col-lg-10 container">
        <div class="bg-lightgray">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!--スポット名登録-->
                <div class="col-lg-5 container">
                    <div class="name　card mb-4">
                        <h3 class="card-header">観光スポット名</h3>
                        <div class="card-body-2">
                            <input type="text" name="post[name]" placeholder="観光スポット名" value="{{ old('post.name') }}"/>
                            <div class="name_error" style="color:red">{{ $errors->first('post.name') }}</div>
                        </div>
                    </div>
                </div>
                <!--住所登録-->
                <div class="col-lg-5 container">
                    <div class="address card mb-4">
                        <h3 class="card-header">住所</h3>
                        <div class="card-body-2">
                            <textarea name="post[address]" placeholder="住所">{{ old('post.address') }}</textarea>
                            <div class="name_error" style="color:red">{{ $errors->first('post.address') }}</div>
                        </div>    
                    </div>
                </div>
                <!--アクセス登録-->
                <div class="col-lg-5 container">
                    <div class="access card mb-4">
                        <h3 class="card-header">アクセス</h3>
                        <div class="card-body-2">
                            <textarea name="post[access]" placeholder="アクセス">{{ old('post.access') }}</textarea>
                            <div class="name_error" style="color:red">{{ $errors->first('post.access') }}</div>
                        </div>
                    </div>
                </div>
                <!--観光スポット説明登録-->
                <div class="col-lg-5 container">
                    <div class="body card mb-4">
                        <h3 class="card-header">観光スポット説明</h3>
                        <div class="card-body-2">
                            <textarea name="post[body]" placeholder="観光スポット説明">{{ old('post.body') }}</textarea>
                            <div class="name_error" style="color:red">{{ $errors->first('post.body') }}</div>
                        </div>
                    </div>
                </div>
                <!--料金登録-->
                <div class="col-lg-5 container">
                    <div class="price card mb-4">
                        <h3 class="card-header">料金</h3>
                        <div class="card-body-2">
                            <input type="tel" name="post[price]" placeholder="1500" value="{{ old('post.price') }}">円
                            <div class="name_error" style="color:red">{{ $errors->first('post.price') }}</div>
                        </div>
                    </div>
                </div>
                <!--営業時間登録-->
                <div class="col-lg-5 container">
                    <div class="sales card mb-4">
                        <h3 class="card-header">営業時間</h3>
                        <div class="card-body-2">
                            <textarea name="post[sales]" placeholder="営業時間">{{ old('post.sales') }}</textarea>
                            <div class="name_error" style="color:red">{{ $errors->first('post.sales') }}</div>
                        </div>
                    </div>
                </div>
                <!--観光スポットホームページURL登録-->
                <div class="col-lg-5 container">
                    <div class="hpurl card mb-4">
                        <h3 class="card-header">観光スポットホームページURL</h3>
                        <div class="card-body-2">
                            <textarea name="post[hpurl]" placeholder="観光スポットホームページURL">{{ old('post.hpurl') }}</textarea>
                            <div class="name_error" style="color:red">{{ $errors->first('post.hpurl') }}</div>
                        </div>
                    </div>
                </div>
                <!--観光スポット写真登録-->
                <div class="col-lg-5 container">
                    <div class="posts card mb-4">
                        <h3 class="card-header">観光スポット写真</h3>
                        <div class="card-body-2">
                            <input type="file" name="post[image]">
                            <div class="name_error" style="color:red">{{ $errors->first('post.image') }}</div>
                        </div>
                    </div>
                </div>
                <input  class="btn btn-outline-dark mt-auto" type="submit" value="登録">
            </form>
        </div>
        <div class="d-flex">
            <a class="btn btn-outline-dark flex-shrink-0" type="button" href="/">一覧に戻る</a>
        </div>
    </div>
@endsection    