<?php
namespace App\Posts\Responders;

use App\App\Responders\Responder;
use App\App\Responders\ResponderInterface;

class UpdatePostResponder extends Responder implements ResponderInterface{
  public function respond(){
    return $this->response;
  }
}
