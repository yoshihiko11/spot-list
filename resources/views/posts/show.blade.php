@extends('layouts.app')

@section('content')
    <main>
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ $post->image }}" alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="Spot-name">{{ $post->name }}</h1>
                        <p Class="Spot-body mb-5">{!! nl2br(htmlspecialchars($post->body)) !!}</p>
                        <div class="bg-lightgray">
                            <div class=""><h2 class="Spot-details">観光スポット詳細</h2></div>
                            <hr>
                            <div class="fs-5">
                                <h4><span class="Spot-details">住所</span></h4>
                                <p><span class="h5">{!! nl2br(htmlspecialchars($post->address)) !!}</span></p>
                            </div>
                            <div class="fs-5">
                                <h4><span class="Spot-details">アクセス</span></h4>
                                <p><span class="h5">{!! nl2br(htmlspecialchars($post->access)) !!}</span></p>
                            </div>
                            <div class="fs-5">
                                @if(isset( $post->price ))
                                    <h4><span class="Spot-details">料金</span></h4>
                                    <p><span class="h5">{{ $post->price }}円</span></p>
                                @else
                                    
                                @endif
                            </div>
                            <div class="fs-5">
                                @if(isset( $post->sales ))
                                    <h4><span class="Spot-details">営業時間</span></h4>
                                    <p><span class="h5">{!! nl2br(htmlspecialchars($post->sales)) !!}</span></p>
                                @else
                                    
                                @endif
                            </div>
                            <div class="fs-5">
                                @if(isset( $post->hpurl ))
                                    <h4><span class="Spot-details">観光スポットホームページ</span></h4>
                                    <p><a class="h5" href="{!! nl2br(htmlspecialchars($post->hpurl)) !!}">{{ $post->name }}</a></p>
                                @else
                                    
                                @endif
                            </div>
                        </div>
                        <like-component :post_id="{{$post->id}}" :show_flg = "true"></Like-component>
                        <div class="d-flex">
                            <a class="btn btn-outline-dark flex-shrink-0" type="button" href="/">一覧に戻る</a>
                             <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/posts/{{ $post->id }}/edit">スポット編集</a></div>
                             <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <div class="text-center"><button class="btn btn-outline-dark mt-auto" type="submit">スポット削除</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">おすすめ観光スポット</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($likedPosts as $likedPost)
                        <div class="col mb-5">
                            <!-- コンテンツ内容をcardの中に内包する-->
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="{{ $likedPost->image }}" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{ $likedPost->name }}</h5>
                                        <!-- Product price-->
                                        <p class='body'>{!! nl2br(htmlspecialchars($likedPost->access)) !!}</p>
                                        <button class='btn liked-button'>
                                            <i class="fa fa-solid fa-thumbs-up" style="font-size: 30px; color:#0099FF;"><span style="font-size: 15px;">{{ $likedPost->counts }}</span></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/posts/{{ $likedPost->id }}">スポット詳細</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>    
            </div>
        </section>
    </main>
@endsection