<?php
namespace App\Categories\Actions;

use Illuminate\Http\Request;
use App\Categories\Domain\Models\Category;
use App\Categories\Responders\GetCategoryResponder;
use App\Categories\Domain\Services\GetgategoryService;

class GetCategoryAction{
    public function __construct(GetCategoryResponder $responder, GetgategoryService $services){
        $this->responder = $responder;
       $this->services = $services;
    }
public function __invoke(Category $category){
    return $this->responder->withResponse(
        $this->services->handle($category)
    )->respond();
// return  $this->services->handle();
}
}
