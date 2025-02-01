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
        return Post::with('user')->orderBy('created_at', 'desc')->get();
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

    /**
     * 投稿をIDで取得
     *
     * @param int $postId
     * @return Post|null
     */
    public function findById(int $postId): ?Post
    {
        return Post::findOrFail($postId);
    }

    /**
     * 投稿を更新
     *
     * @param int $postId
     * @param array $postData
     * @return bool
     */
    public function update(int $postId, array $postData): bool
    {
        $post = $this->findById($postId);
        return $post->update($postData);
    }

    /**
     * 投稿を削除する
     *
     * @param int $postId
     * @return void
     */
    public function delete(int $postId): void
    {
        Post::destroy($postId);
    }
}
