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
                <button class='btn liked-button'>
                    <i class="fa fa-solid fa-thumbs-up" style="font-size: 30px; color:#0099FF;"><span style="font-size: 15px;">{{ $post->likes->count() }}</span></i>
                </button>
            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/posts/{{ $post->id }}">スポット詳細</a></div>
        </div>
    </div>
</div>