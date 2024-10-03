<?php

namespace App\Services;

use App\Models\Post;
use App\Repositories\PostRepositoryInterface;

class PostService
{

    public function __construct(public PostRepositoryInterface $postRepository){

    }
    public function createPost($data)
    {

        return $this->postRepository->create($data);
    }
    public function getAll(){
       return $this->postRepository->all();
    }
    public function update($id){
        return $this->postRepository->update($id);
    }
}
