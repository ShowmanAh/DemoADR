<?php
namespace App\Categories\Responders;

use App\App\Responders\Responder;
use App\App\Responders\ResponderInterface;

class UpdateCategoryResponder extends Responder implements ResponderInterface
{
    public function respond() {
		return $this->response;
	}
}
