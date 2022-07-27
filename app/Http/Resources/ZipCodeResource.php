<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\MunicipalityResource;
use App\Http\Resources\Federal_EntityResource;
use App\Http\Resources\SettlementResource;
class ZipCodeResource extends JsonResource
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
            'zip_code' => str_pad($this->zip_code,5,"0",STR_PAD_LEFT),
            'locality' => strtoupper($this->locality->name),
            'federal_entity' => new Federal_EntityResource($this->federal_entity),
            'settlements' => new SettlementResource($this->settlements),
            'municipality' => new MunicipalityResource($this->municipality),
           
        ];
    }
}
