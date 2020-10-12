<?php
namespace App\Categories\Domain\Services;

use App\App\Domain\Services\Service;
use App\App\Domain\Payloads\GenericPayload;

class UpdateCategoryService extends Service{
 public function handle($data = [], $task = null){
  $task->update($data);
  return new GenericPayload([
    'message' => 'Task Updated Successfully',
]);
 }
}
