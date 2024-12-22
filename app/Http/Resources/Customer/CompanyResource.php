<?php

namespace App\Http\Resources\Customer;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'logo' => $this->logo,
            'ice' => $this->ice,
            'patent' => $this->patent,
            'rc' => $this->patent,
            'tp' => $this->tp,
            'logo_path' => $this->logo_path,
            'unique_hash' => $this->unique_hash,
            'owner_id' => $this->owner_id,
            'address' => $this->when($this->address()->exists(), function () {
                return new AddressResource($this->address);
            }),
        ];
    }
}
