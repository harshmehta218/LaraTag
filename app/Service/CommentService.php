<?php

namespace App\Service;

use App\Models\Comment;
use App\Models\Post;

class CommentService
{
    private $model;

    public function __construct(Comment $commentModel)
    {
        $this->model = $commentModel;
    }

    public function createComment($requestArray)
    {
        $post = Post::find($requestArray['post_id']);

        if ($post == null) {
            $message['post']['notfound'] = 'Post is not found';
            return $message;
        }

        $comment = Comment::create([
            'post_id' => $requestArray['post_id'],
            'comment' => $requestArray['comment']
        ]);

        $returnCommentWithPost = Comment::with('post')->where('id', $comment->id)->first();
        return $returnCommentWithPost;
    }
}
