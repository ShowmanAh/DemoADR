<?php
namespace App\Posts\Actions;

use App\Posts\Domain\Models\Post;
use App\Posts\Responders\ShowPostResponder;
use App\Posts\Domain\Services\ShowPostService;

class ShowPostAction{
public function __construct(ShowPostResponder $responder, ShowPostService $services){
      $this->responder = $responder;
      $this->services = $services;
}
public function __invoke(Post $post){
    //dd('sdf');
    return $this->responder->withResponse(
        $this->services->handle($post)
        )->respond();
   // return $this->services->handle($post);
}
}
