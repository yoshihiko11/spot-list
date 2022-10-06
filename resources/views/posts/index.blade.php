@extends('layouts.app')

@section('content')
    <main>
       

        <div class="container px-4 px-lg-5 mt-5">
            @include('top_parts.sidebar')
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('posts.create') }}">スポット新規登録</a></div>
            </div>
            @include("section.section01")
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </main>
@endsection