<?php

declare(strict_types=1);

namespace App\Providers;

use App\Repositories\Contract\PostContract;
use App\Repositories\Contract\UserContract;
use App\Repositories\PostRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

final class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {}

    public function register()
    {
        $this->app->bind(
            UserContract::class,
            UserRepository::class
        );

        $this->app->bind(
            PostContract::class,
            PostRepository::class
        );
    }
}
