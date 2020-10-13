<?php
namespace App\Posts\Domain\Services;

use App\App\Domain\Services\Service;
use App\App\Domain\Payloads\GenericPayload;
use App\Posts\Domain\Repositories\PostsRepository;

class CreatePostService extends Service{
    protected $post;
public function __construct(PostsRepository $post){
   $this->post = $post;
}
public function handle($data = []){
    $this->post->create($data);
   // dd('sdf');
    return new GenericPayload([
   'messages' => 'post created successfully'
    ], 200);
}
}
