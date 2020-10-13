<?php
namespace App\Posts\Actions;

use App\Posts\Domain\Requests\PostRequest;
use App\Posts\Responders\CreatePostResponder;
use App\Posts\Domain\Services\CreatePostService;

class CreatePostAction{
public function __construct(CreatePostResponder $responder, CreatePostService $services){
    $this->responder = $responder;
    $this->services = $services;
}
public function __invoke(PostRequest $request){
    //dd('sdf');
   // $this->services->handle($request->validated());

  return $this->responder->withResponse(
    $this->services->handle($request->validated())
  )->respond();

}
}
