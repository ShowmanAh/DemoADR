<?php
namespace App\Categories\Domain\Services;

use App\App\Domain\Services\Service;
use App\App\Domain\Payloads\GenericPayload;
use App\Categories\Domain\Repositories\CategoriesRepository;

class CreateCategoriesService extends Service{
    protected $category;
    public function __construct(CategoriesRepository $category){
      $this->category = $category;
    }
    public function handle($data = []){
     $this->category->create($data);
     return new GenericPayload([
        'message' => 'category created successfully',
     ], 200);
    }
}
