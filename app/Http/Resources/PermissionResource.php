<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Permission*/
class PermissionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'guard_name' => $this->guard_name,
            'role' => RoleResource::make(($this->whenLoaded('permissions'))),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
