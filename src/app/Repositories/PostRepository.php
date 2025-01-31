<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostRepository
{
    /**
     * 投稿を全件取得する
     *
     * @return Collection
     */
    public function getAllPosts(): Collection
    {
        return Post::with('user')->get();
    }

    /**
     * 投稿を保存する
     *
     * @param array $data
     * @return Post
     */
    public function storePost(array $data): post
    {
        return Post::create([
            'user_id' => auth()->id(),
            'title' => $data['title'],
            'body' => $data['body'],
        ]);
    }
}
