<?php
namespace App\Categories\Domain\Services;

use App\App\Domain\Services\Service;
use App\App\Domain\Payloads\GenericPayload;
use App\Categories\Domain\Repositories\CategoriesRepository;

class GetgategoryService extends Service{
    protected $category;
   // public $id;
    public function __construct(CategoriesRepository $category){
      $this->category = $category;
    }
    public function handle($category = null){
      // $this->category->getById($this->id);
    //  dd($category);
      return new GenericPayload($category);
    }
}
