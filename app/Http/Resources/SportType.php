<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SportType extends JsonResource
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
            'id' => $this->id,
            'key' => $this->key,
            'name' => $this->name,
            'image_url' => $this->image_url,
        ];
    }
}

/**
 * @apiDefine SportTypeResource
 * @apiSuccess (SportType) {Integer} id ID of the sport-type
 * @apiSuccess (SportType) {String} key Key of the sport-type
 * @apiSuccess (SportType) {String} name Name of the sport-type
 * @apiSuccess (SportType) {String} image_url Url of the sport-type image
 */
