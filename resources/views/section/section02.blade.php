 <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ $post->image }}" alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="Spot-name">{{ $post->name }}</h1>
                        <p Class="Spot-body mb-5">　{{ $post->body }}</p>
                        <h4 class="Spot-details">観光スポット詳細</h4>
                        <div class="fs-5">
                            <span class="Spot-details">　　　住所</span>
                            <span>　{{ $post->address }}</span>
                        </div>
                        <div class="fs-5">
                            <span class="Spot-details">　　アクセス</span>
                            <span>　{{ $post->access }}</span>
                        </div>
                        <div class="fs-5">
                            @if(isset( $post->price ))
                                <span class="Spot-details">　　　料金</span>
                                <span>　{{ $post->price }}円</span>
                            @else
                                
                            @endif
                        </div>
                        <div class="fs-5">
                            @if(isset( $post->sales ))
                                <span class="Spot-details">　　　営業時間</span>
                                <span>　{{ $post->sales }}</span>
                            @else
                                
                            @endif
                        </div>
                        <div class="fs-5">
                            @if(isset( $post->hpurl ))
                                <span class="Spot-details">　　　ホームページ</span>
                                <span>　{{ $post->hpurl }}</span>
                            @else
                                
                            @endif
                        </div>
                        <like-component :post_id="{{$post->id}}"></Like-component>
                        <p class="card-text mb-0"><small class="text-muted">いいね数<{{$post->likes->count()}}</small></p>
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
                        @include("top_parts.spot")
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>