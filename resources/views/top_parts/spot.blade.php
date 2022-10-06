<div class="col mb-5">
                    <!-- コンテンツ内容をcardの中に内包する-->
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://spotlistmatu.s3.ap-northeast-1.amazonaws.com/example/9TdsVaSLLTBPKTh51P0plCAQP615syleaEvlNzWi.png" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $post->name }}</h5>
                                <!-- Product price-->
                                <p class='body'>{{ $post->access }}</p>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/posts/{{ $post->id }}">スポット詳細</a></div>
                        </div>
                    </div>
                </div>