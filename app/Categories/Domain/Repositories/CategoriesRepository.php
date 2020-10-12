<?php
namespace App\Categories\Domain\Repositories;

use App\Categories\Domain\Models\Category;
use App\App\Domain\Repositories\Repository;

class CategoriesRepository extends Repository{
  protected $model;
  public function __construct(Category $category){
     // dd('aa');
     // return $category->all();
      $this->model = $category;
  }
}
