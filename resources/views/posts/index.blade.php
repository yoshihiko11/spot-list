@extends('layouts.app')

@section('content')
    <main>
        <div class="container px-4 px-lg-5 mt-5">
            @include('top_parts.sidebar')
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('posts.create') }}">スポット新規登録</a></div>
            </div>
             <!-- Section-->
            <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @foreach ($posts as $post)
                            <div class="col mb-5">
                                <!-- コンテンツ内容をcardの中に内包する-->
                                <div class="card h-100">
                                    <!-- Product image-->
                                    <img class="card-img-top" src="{{ $post->image }}" alt="..." />
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder">{{ $post->name }}</h5>
                                            <!-- Product price-->
                                            <p class='body'>{{ $post->access }}</p>
                                            <like-component :post_id = "{{ $post->id }}" :show_flg = "false"></like-component>
                                        </div>
                                    </div>
                                    <!-- Product actions-->
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
            {{ $posts->links() }}
        </div>
    </main>
@endsection