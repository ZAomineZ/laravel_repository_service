<?php

declare(strict_types=1);

namespace App\Services\Contract;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface UserContract
{
    public function get(int $id): ?User;

    public function getAll(): Collection;

    public function create(array $data = []): User;

    public function update(int $id, array $data = []): User;

    public function delete(int $id): bool;
}
