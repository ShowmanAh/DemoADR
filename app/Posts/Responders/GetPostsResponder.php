<?php
namespace App\Posts\Responders;

use App\App\Responders\Responder;

class GetPostsResponder extends Responder{

    public function respond()
    {
        return response()->json($this->response, $this->response['status']);
    }
}
