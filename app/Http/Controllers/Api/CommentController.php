<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\create;
use App\Service\CommentService;
use App\Http\Resources\Api\Comment\resource as CommentResource;

class CommentController extends Controller
{
    private $service;

    public function __construct(CommentService $commentService)
    {
        $this->service = $commentService;
    }

    public function createComment(create $request)
    {
        $data = $this->service->createComment($request->all());

        return new CommentResource($data);
    }
}
