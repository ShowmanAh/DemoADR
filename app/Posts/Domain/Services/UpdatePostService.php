<?php
namespace App\Posts\Domain\Services;

use App\App\Domain\Services\Service;
use App\App\Domain\Payloads\GenericPayload;
use App\Posts\Domain\Repositories\PostsRepository;

class UpdatePostService extends Service{
    protected $post;
    public function __construct(PostsRepository $post){
     $this->post = $post;
    }
public function handle($data = [], $post = null){
    //return $post;
  $post = $post->update($data);
  return new GenericPayload($post);

}
}
