<?php

declare(strict_types=1);

namespace App\Repositories\Contract;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface UserContract
{
    /**
     * Find resource.
     *
     * @param int $id
     * @return User|null
     */
    public function find(int $id): ?Model;

    /**
     * Find all resources.
     *
     * @return Collection
     */
    public function findAll(): Collection;

    /**
     * Create new resource.
     *
     * @param array $data
     * @return User
     */
    public function create(array $data): Model;

    /**
     * Update existing resource.
     *
     * @param int $id
     * @param array $data
     * @return User
     */
    public function update(int $id, array $data): Model;

    /**
     * Delete existing resource.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool;
}
