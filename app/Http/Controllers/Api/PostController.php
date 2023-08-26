<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Service\PostService;
use App\Http\Resources\Api\Post\resource as PostResource;

class PostController extends Controller
{
    private $service;

    public function __construct(PostService $postService)
    {
        $this->service = $postService;
    }

    public function postDetails($id)
    {
        $data = $this->service->postDetails($id);
        return new PostResource($data);
    }
}
