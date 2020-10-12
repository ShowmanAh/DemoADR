<?php

namespace App\Users\Domain\Services;

use App\App\Domain\Services\Service;
use App\Users\Domain\Repositories\UserRepository;

class GetUsersService extends Service{
protected $users;
public function __construct(UserRepository $users){
$this->users = $users;
}
public function handle($data = []){
    $users = $this->users->paginate(10);
    dd('dd');
    return $users;
}
}
