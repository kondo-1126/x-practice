<?php

namespace App\Domains;

use App\Repositories\PostRepository;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

/**
 * 投稿に関するビジネスロジックを処理するクラス
 */
class PostDomain
{
    /**
     * コンストラクタ
     *
     * @param PostRepository
     */
    protected PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * 投稿一覧を取得する
     *
     * @return Collection
     */
    public function getAllPosts(): Collection
    {
        return $this->postRepository->getAllPosts();
    }

    /**
     * 投稿を作成する
     *
     * @param array $postData
     * @return Post
     */
    public function storePost(array $postData): Post
    {
        return $this->postRepository->storePost($postData);
    }

    /**
     * 投稿を取得
     *
     * @param int $postId
     * @return Post|null
     */
    public function getPostById(int $postId): ?Post
    {
        return $this->postRepository->findById($postId);
    }

    /**
     * 投稿を更新
     *
     * @param int $postId
     * @param array $postData
     * @return bool
     */
    public function updatePost(int $postId, array $postData): bool
    {
        return $this->postRepository->update($postId, $postData);
    }

    /**
     * 投稿を削除する
     *
     * @param int $postId
     * @return void
     */
    public function deletePost(int $postId): void
    {
        $this->postRepository->delete($postId);
    }
}
