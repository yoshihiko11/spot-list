<!-- Side widgets-->
<form method="GET" action="{{ route('posts.search') }}">
    <input type="search" placeholder="ユーザー名を入力" name="search" value="@if (isset($search)) {{ $search }} @endif"><div>
        <button type="submit">検索</button>
        <button>
            <a href="{{ route('posts.search') }}" class="text-white">
                クリア
            </a>
        </button>
    </div>
</form>
<!--
<div class="col-lg-4">
    <!-- Search widget-- >
    <div class="card mb-4">
        <div class="card-header">スポット検索</div>
        <div class="card-body">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                <button class="btn btn-primary" id="button-search" type="button">検索</button>
            </div>
        </div>
    </div>
</div>-->