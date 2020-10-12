<?php
namespace App\Categories\Responders;

use App\App\Responders\Responder;
use App\Categories\Domain\Resources\CategoryResource;

class GetCategoryResponder extends Responder{
    public function respond()
    {
        $this->response['data'] = new CategoryResource($this->response['data']);

        return $this->response;
    }
}
