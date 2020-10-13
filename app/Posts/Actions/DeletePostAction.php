<?php
namespace App\Posts\Actions;

use App\Posts\Domain\Models\Post;
use App\Posts\Responders\DeletePostResponder;
use App\Posts\Domain\Services\DeletePostService;

class DeletePostAction{
public function __construct(DeletePostResponder $responder, DeletePostService $services){
    $this->responder = $responder;
    $this->services = $services;
}
public function __invoke(Post $post){
    return $this->responder->withResponse(
        $this->services->handle($post)
    )->respond();

}
}
