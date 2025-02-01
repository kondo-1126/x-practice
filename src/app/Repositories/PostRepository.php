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
     * @param array $postData
     * @return Post
     */
    public function storePost(array $postData): post
    {
        return Post::create([
            'user_id' => auth()->id(),
            'title' => $postData['title'],
            'content' => $postData['content'],
        ]);
    }
}
