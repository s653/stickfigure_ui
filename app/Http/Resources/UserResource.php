<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => customEncrypt($this->id),
            'name' => $this->name,
            'email' => $this->email,
            'profile_pic' => $this->profile_pic,
            'cover_photo' => $this->cover_photo
        ];
    }
}
