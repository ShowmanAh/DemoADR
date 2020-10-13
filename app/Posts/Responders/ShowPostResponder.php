<?php
namespace App\Posts\Responders;

use App\App\Responders\Responder;
use App\Posts\Domain\Resources\PostsResource;

class ShowPostResponder extends Responder{
  public function respond(){
    $this->response['data'] = new PostsResource($this->response['data']);

    return $this->response;
  }
}
