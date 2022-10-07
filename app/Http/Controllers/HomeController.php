<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

final class HomeController extends Controller
{
    public function __construct(
        protected PostService $postService
    )
    {
    }

    public function index(): Factory|View|Application
    {
        $posts = $this->postService->getAll();

        dd($posts);

        return view('home');
    }
}
