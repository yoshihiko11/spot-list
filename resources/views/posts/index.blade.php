@extends('layouts.app')

@section('content')
    <main>
        <header class="bg-img py-5">
            <div class="container my-5">
                <div class="text-center text-red text-box">
                    <h1 class="header-text text-shadow">千葉県観光スポット</h1>
                    <p class="header-text-min text-shadow">おすすめなスポット一覧</p>
                </div>
            </div>
        </header>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="col-lg-8">
                    <!-- スポット検索 -->
                    <div class="col-lg-4 container">
                        <div class="card mb-4">
                            <h3 class="card-header">スポット検索</h3>
                            <form class="input-group card-body" method="GET" action="{{ route('posts.search') }}">
                                <input class="form-control" type="search" placeholder="キーワードを入力" autocomplete="off" name="search" value="@if (isset($search)) {{ $search }} @endif">
                                <button class="search-btn-primary" type="submit">検索</button>
                            </form>
                        </div>
                    </div>
                <div class="text-center">スポット新規登録はこちら><a class="mt-auto" href="{{ route('posts.create') }}">スポット新規登録</a></div>
            </div>
             <!-- スポット一覧表示 -->
            <section class="col-lg-8">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @foreach ($posts as $post)
                            <div class="col mb-5">
                                <!-- スポット内容表示 -->
                                <div class="card h-100">
                                    <!-- スポット画像 -->
                                    <div class="border">
                                        <img class="card-img-top index-img" src="{{ $post->image }}" alt="..." />
                                    </div>
                                    <!-- スポット詳細 -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- スポット名 -->
                                            <h5 class="fw-bolder">{{ $post->name }}</h5>
                                            <!-- スポットアクセス -->
                                            <p class='body'>{!! nl2br(htmlspecialchars($post->access)) !!}</p>
                                            
                                        </div>
                                    </div>
                                    <!-- スポット詳細画面移動 -->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <span>
                                            <a class="btn btn-outline-dark mt-auto" href="/posts/{{ $post->id }}">スポット詳細</a>
                                            @auth
                                                <like-component :post_id = "{{ $post->id }}" :show_flg = "false"></like-component>
                                             @endauth
                                             </span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        <div class='paginate'>
            {{ $posts->appends(request()->query())->links() }}
        </div>
    </main>
@endsection