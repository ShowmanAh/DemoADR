<?php
namespace App\Categories\Domain\Services;

use App\App\Domain\Services\Service;
use App\App\Domain\Payloads\GenericPayload;
use App\Categories\Domain\Repositories\CategoriesRepository;

class IndexCategoriesService extends Service{
    protected $category;
  public function __construct(CategoriesRepository $category){
    $this->category = $category;
  }
  public function handle(){
     $categories = $this->category->getAll();
     return new GenericPayload( $categories);
    // return $categories;
    // dd('done');
  }
}
