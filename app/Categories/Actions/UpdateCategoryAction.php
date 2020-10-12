<?php
namespace App\Categories\Actions;

use App\Categories\Domain\Models\Category;
use App\Categories\Domain\Requests\CategoryRequest;
use App\Categories\Responders\UpdateCategoryResponder;
use App\Categories\Domain\Services\UpdateCategoryService;

class UpdateCategoryAction{
public function __construct(UpdateCategoryResponder $responder, UpdateCategoryService $services){
    $this->responder = $responder;
    $this->services = $services;
}
public function __invoke(CategoryRequest $request,  Category $category){
    return $this->responder->withResponse(
        $this->services->handle($request->validated(), $category)
    )->respond();
}
}
