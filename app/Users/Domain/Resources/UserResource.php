<?php

namespace App\Users\Domain\Resources;

use App\App\Domain\Resources\BaseResource;

class UserResource extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return array_merge(
            [
                'id' => $this->id,
                'email' => $this->email,
                'username' => $this->name,

            ],
            parent::toArray($request)
        );
    }


}
