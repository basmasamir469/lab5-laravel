<?php

namespace App\Http\Resources;
use App\Http\Resources\PostResource;

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
            'user-id'=>$this->id,
            'user-name'=>$this->name,
            'user-email'=>$this->email,
            'posts'=>$this->posts
        ];
    }
}
