<?php

namespace App\Domains;

use App\Repositories\PostRepository;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

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
     * @param array $data
     * @return Post
     */
    public function storePost(array $data): Post
    {
        return $this->postRepository->storePost($data);
    }
}
