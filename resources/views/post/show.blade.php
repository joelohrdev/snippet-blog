@extends('layouts.app')

@section('content')
    <div>
        <div class="space-y-3">
            <h2 class="text-2xl font-medium">{{ $post->title }}</h2>
            <div class="flex items-center justify-between space-x-4">
                <time class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}</time>
                <div>
                    @foreach($post->tags as $tag)
                        <a href="{{ $tag->slug }}" class="inline-flex items-center rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="prose max-w-none prose-sky prose-headings:font-medium">
            <x-markdown theme="github-dark">
                {!! $post->body !!}
            </x-markdown>
        </div>
    </div>
@endsection
