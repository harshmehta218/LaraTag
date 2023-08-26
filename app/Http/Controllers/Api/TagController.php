<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Service\TagService;
use App\Http\Resources\Api\tag\resource as TagResource;
use App\Http\Requests\tag\create;

class TagController extends Controller
{
    private $service;

    public function __construct(TagService $tagService)
    {
        $this->service = $tagService;
    }

    public function createTag(create $request)
    {
        $data = $this->service->createTag($request->all());
        return new TagResource($data);
    }
}
