<?php
namespace App\Posts\Domain\Services;

use App\App\Domain\Services\Service;
use App\App\Domain\Payloads\GenericPayload;

class ShowPostService extends Service{
public function handle($post = null){
  return new GenericPayload($post);
}
}
