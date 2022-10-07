<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use App\Services\Contract\UserContract;
use App\Repositories\Contract\UserContract as UserRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

final class UserService implements UserContract
{
    public function __construct(
        protected UserRepositoryContract $userRepository
    )
    {
    }

    public function get(int $id): ?User
    {
        return $this->userRepository->find($id);
    }

    public function getAll(): Collection
    {
        return $this->userRepository->findAll();
    }

    public function create(array $data = []): User
    {
        return $this->userRepository->create($data);
    }

    public function update(int $id, array $data = []): User
    {
        return $this->userRepository->update($id, $data);
    }

    public function delete(int $id): bool
    {
        return $this->userRepository->delete($id);
    }
}
