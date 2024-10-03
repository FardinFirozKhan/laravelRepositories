<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostService;
use App\Repositories\PostRepositoryInterface;

class PostController extends Controller
{
    public function __construct(public PostService $postService){

    }
    public function store(){
        $data= ['title' => 'title 1', 'description' =>'This is for testing purpose'];
        $post = $this->postService->createPost($data);
        dd($post->toArray());
    }
    public function getAll(){
       $post = $this->postService->getAll();
       dd($post->toArray());
    }
    public function update(){
        $id= 3;
        $post=$this->postService->update($id);
        dd($post->toArray());
    }
}
