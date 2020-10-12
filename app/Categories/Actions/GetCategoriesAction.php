<?php
namespace App\Categories\Actions;

use App\Categories\Responders\IndexCategoriesResponder;
use App\Categories\Domain\Services\IndexCategoriesService;

class GetCategoriesAction{
    public function __construct(IndexCategoriesResponder $responder, IndexCategoriesService $services){
        $this->responder = $responder;
        $this->services = $services;
    }
    public function __invoke(){
     // return $this->services->handle();
        //dd('dd');
        return $this->responder->withResponse(
            $this->services->handle()
        )->respond();
    }
}
