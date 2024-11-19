@extends('partials.layout')
@section('title', 'Home Page')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="text-center my-6">
        {{ $posts->links() }}
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($posts as $post)
            <div class="card bg-base-300 shadow-lg">
                <figure>
                    <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Post Thumbnail" class="w-full h-48 object-cover">
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="text-gray-600">{{ $post->snippet }}</p>
                    <p class="text-sm text-neutral-content">{{ $post->created_at->diffForHumans() }}</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection


