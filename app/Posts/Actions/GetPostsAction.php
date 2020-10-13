<?php
namespace App\Posts\Actions;

use App\Posts\Responders\GetPostsResponder;
use App\Posts\Domain\Services\GetPostsService;

class GetPostsAction{

    public function __construct(GetPostsResponder $responder, GetPostsService $services){
        $this->responder = $responder;
         $this->services = $services;
    }
    public function __invoke(){
        return $this->responder->withResponse(
            $this->services->handle()
        )->respond();

    }
}
