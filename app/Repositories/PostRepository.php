<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Contract\PostContract;

final class PostRepository extends BaseRepository implements PostContract
{
    public function __construct(
        protected Post $post
    )
    {
        parent::__construct($this->post);
    }
}
