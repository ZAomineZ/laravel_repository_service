<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Post;
use App\Services\Contract\PostContract;
use App\Repositories\Contract\PostContract as PostRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

final class PostService implements PostContract
{
    public function __construct(
        protected PostRepositoryContract $postRepository
    )
    {
    }

    public function get(int $id): ?Post
    {
        return $this->postRepository->find($id);
    }

    public function getAll(): Collection
    {
        return $this->postRepository->findAll();
    }

    public function create(array $data = []): Post
    {
        return $this->postRepository->create($data);
    }

    public function update(int $id, array $data = []): Post
    {
        return $this->postRepository->update($id, $data);
    }

    public function delete(int $id): bool
    {
        return $this->postRepository->delete($id);
    }
}
