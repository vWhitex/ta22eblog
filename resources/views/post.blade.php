@extends('partials.layout')

@section('title', 'Home page')

@section('content')
    <div class="container mx-auto">
        @include('partials.post-card', ['full' => true])
        <form method="POST" action="{{ route('post.comment', $post->id) }}" class="mt-4">
            @csrf
            <div class="form-control">
                <textarea id="comment" name="comment" class="textarea textarea-bordered"
                    placeholder="Add a comment"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>

        @foreach($post->comments()->latest()->get() as $comment)
            <div class="card bg-base-300 shadow-xl mt-3">
                <div class="card-body">
                    {{$comment->body}}
                    <p class="text-base-content">{{$comment->user->name}}</p>
                    <p class="text-neutral-content">{{$comment->created_at->diffForHumans()}}</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection