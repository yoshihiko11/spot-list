@extends('layouts.app')

@section('content')
    <main>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <!-- スポット検索 -->
                <h3>スポット検索</h3>
                <form method="GET" action="{{ route('posts.search') }}">
                    <input type="search" placeholder="検索内容を入力" autocomplete="off" name="search" value="@if (isset($search)) {{ $search }} @endif"><div>
                        <button class="btn btn-outline-dark mt-auto" type="submit">検索</button>
                    </div>
                </form>
                <!-- 新規スポット登録 -->
                <p><h3>スポット新規登録</h3></p>
                <div><a class="btn btn-outline-dark mt-auto" href="{{ route('posts.create') }}">スポット新規登録</a></div>
            </div>
             <!-- スポット一覧表示 -->
            <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @foreach ($posts as $post)
                            <div class="col mb-5">
                                <!-- スポット内容表示 -->
                                <div class="card h-100">
                                    <!-- スポット画像 -->
                                    <img class="card-img-top" src="{{ $post->image }}" alt="..." />
                                    <!-- スポット詳細 -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- スポット名 -->
                                            <h5 class="fw-bolder">{{ $post->name }}</h5>
                                            <!-- スポットアクセス -->
                                            <p class='body'>{!! nl2br(htmlspecialchars($post->access)) !!}</p>
                                            <like-component :post_id = "{{ $post->id }}" :show_flg = "false"></like-component>
                                        </div>
                                    </div>
                                    <!-- スポット詳細画面移動 -->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/posts/{{ $post->id }}">スポット詳細</a></div>
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