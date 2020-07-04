<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\User */

class UserResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'roles' => $this->when($this->relationLoaded('roles'), $this->getRoleNames()),
            'permissions' => $this->when($this->relationLoaded('permissions'), $this->getAllPermissions()->pluck('name')),
            'direct_permissions' => $this->when($this->relationLoaded('permissions'), $this->getPermissionNames()),
            'avatar' => $this->gravatar,
            'introduction' => true,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
