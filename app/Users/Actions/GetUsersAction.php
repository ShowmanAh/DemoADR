<?php
namespace App\Users\Actions;

use App\Users\Responders\GetUserResponder;
use App\Users\Domain\Services\GetUsersService;

class GetUsersAction{
   // protected $responder;
   // protected $services;
  public function __construct(GetUserResponder $responder, GetUsersService $services){

        $this->responder = $responder;
        $this->services = $services;
  }
  public function __invoke()
  {
      dd('dd');
      return $this->responder->withResponse(
          $this->services->handle()
      )->respond();
  }

}


