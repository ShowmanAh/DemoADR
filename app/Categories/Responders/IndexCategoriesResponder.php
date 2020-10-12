<?php
namespace App\Categories\Responders;

use App\App\Responders\Responder;

class IndexCategoriesResponder extends Responder{
    public function respond()
    {
        return response()->json($this->response, $this->response['status']);
    }
}
