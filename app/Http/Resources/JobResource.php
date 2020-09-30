<?php

namespace App\Http\Resources;

use App\Http\Resources\lookups\CategoryResource;
use App\Http\Resources\lookups\CountryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class JobResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'category' => new CategoryResource($this->category),
            'country' => new CountryResource($this->country),
            'deadline' => $this->deadline->toDayDateTimeString(),
            'createdBy' => new UserResource($this->user),
            
        ];
    }
}

/**
 * The problem is that you use UserResource::collection($this->user) 
 * and you have just one element not a collection so you can replace 
 * it with new UserResource($this->user) like this :
 * https://stackoverflow.com/questions/47710805/laravel-api-resource-call-to-undefined-method-illuminate-database-query-builder
 */