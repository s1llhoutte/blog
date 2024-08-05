<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {
        auth()->user()->LikedPosts()->detach($post->id);

        return redirect()->route('personal.liked.index');
    }
}
