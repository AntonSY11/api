<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TournamentFormat extends JsonResource
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
        ];
    }
}

/**
 * @apiDefine TournamentFormatResource
 * @apiSuccess (TournamentFormat) {Integer} id ID of the tournament-format
 * @apiSuccess (TournamentFormat) {String} key Key of the tournament-format
 * @apiSuccess (TournamentFormat) {String} name Name of the tournament-format
 */
