<?php
namespace App\Posts\Domain\Repositories;

use App\Posts\Domain\Models\Post;
use App\App\Domain\Repositories\Repository;

class PostsRepository extends Repository{
    protected $model;
 public function __construct(Post $post){
   $this->model = $post;
 }
}
