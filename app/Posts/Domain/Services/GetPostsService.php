<?php
namespace App\Posts\Domain\Services;

use App\App\Domain\Services\Service;
use App\App\Domain\Payloads\GenericPayload;
use App\Posts\Domain\Repositories\PostsRepository;

class GetPostsService extends Service{
    protected $post;
public function __construct(PostsRepository $post){
   $this->post = $post;
}
public function handle(){
 $posts =  $this->post->getAll();
 return new GenericPayload($posts);

}
}
