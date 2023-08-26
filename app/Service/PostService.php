<?php

namespace App\Service;

use App\Models\Post;

class PostService
{
    private $model;

    public function __construct(Post $postModel)
    {
        $this->model = $postModel;
    }

    public function postDetails($id)
    {
        $posts = Post::with('user', 'tags', 'comments')->find($id);
        return $posts;
    }
}



