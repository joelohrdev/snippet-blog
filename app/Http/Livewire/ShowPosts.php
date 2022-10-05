<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Post::where('published', 1)
                ->orderBy('published_at', 'DESC')
                ->paginate(10)
        ]);
    }
}
