<?php
namespace App\Categories\Actions;

use App\Categories\Domain\Requests\CategoryRequest;
use App\Categories\Responders\CreateCategoryResponder;
use App\Categories\Domain\Services\CreateCategoriesService;

class CreateCategoryAction{
    public function __construct(CreateCategoryResponder $responder, CreateCategoriesService $services){
        $this->responder = $responder;
        $this->services = $services;
    }
    public function __invoke(CategoryRequest $request){
       // $this->services->handle();
       return $this->responder->withResponse(
        $this->services->handle($request->validated())
        )->respond();
    }
}
