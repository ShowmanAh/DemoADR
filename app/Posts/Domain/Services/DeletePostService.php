<?php
namespace App\Posts\Domain\Services;

use App\App\Domain\Services\Service;
use App\App\Domain\Payloads\GenericPayload;

class DeletePostService extends Service{
public function handle($post = null){
  $post->delete();
  return new GenericPayload([
    'messages' => 'post deleted successfully'
     ], 200);
}
}
