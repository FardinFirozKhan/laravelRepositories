<?php

namespace App\Repositories;

use App\Models\Post;

interface PostRepositoryInterface{
    public function create(array $data): Post;
    public function all();
    public function update(int $id): Post;
}