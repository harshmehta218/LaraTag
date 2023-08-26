<?php

namespace App\Service;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

class TagService
{
    private $model;

    public function __construct(Tag $tagModel)
    {
        $this->model = $tagModel;
    }

    public function createTag($requestArray)
    {
        $post = Post::find($requestArray['post_id']);

        if ($post == null) {
            $message['post']['notfound'] = 'Post is not found';
            return $message;
        }

        $createTag = Tag::create([
            'post_id' => $requestArray['post_id'],
            'tag_name' => $requestArray['tag_name'],
        ]);

        $tagWithPostResponse = Tag::with('post')->where('id', $createTag->id)->first();

        return $tagWithPostResponse;
    }
}
