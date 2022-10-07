<?php

declare(strict_types=1);

namespace App\Services\Contract;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

interface PostContract
{
    public function get(int $id): ?Post;

    public function getAll(): Collection;

    public function create(array $data = []): Post;

    public function update(int $id, array $data = []): Post;

    public function delete(int $id): bool;
}
