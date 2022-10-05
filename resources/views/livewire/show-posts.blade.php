<div class="w-full space-y-4">
    @forelse($posts as $post)
        <a
            class="flex flex-col p-5 border rounded-md hover:border-sky-600 transition"
            href="{{ route('post.show', $post) }}"
        >
            <h2 class="font-medium text-gray-800">{{ $post->title }}</h2>
            <div class="flex flex-col justify-between md:flex-row md:items-center md:space-x-2 text-sm text-gray-500">
                {{ \Carbon\Carbon::parse($post->published_at)->format('F d, Y') }}
                <div>
                    @foreach($post->tags as $tag)
                        <span class="inline-flex items-center rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            </div>
        </a>
    @empty
        <p>There are no posts to show.</p>
    @endforelse
    <div class="mt-5">
        {{ $posts->links() }}
    </div>
</div>
