<?php
namespace App\Posts\Actions;

use App\Posts\Domain\Models\Post;
use App\Posts\Domain\Requests\PostRequest;
use App\Posts\Responders\UpdatePostResponder;
use App\Posts\Domain\Services\UpdatePostService;

class UpdatePostAction{
    public function __construct(UpdatePostResponder $responder, UpdatePostService $services){
        $this->responder = $responder;
        $this->services = $services;
    }
    public function __invoke(PostRequest $request, Post $post){
      return $this->responder->withResponse(
          $this->services->handle($request->validated(), $post)
      )->respond();

    }
}
