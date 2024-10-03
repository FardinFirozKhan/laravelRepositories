<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(private Post $post)
    {
        //
    }

    public function create(array $data): Post{
        $post = $this->post->create($data);
        return $post;
    }
    public function all(){
        return $this->post->get();
    }
    public function update(int $id): Post{
        $post =$this->post->find($id);
        $post->title = "title 3 updated";
        $post->save();
        return $post;
    }
}