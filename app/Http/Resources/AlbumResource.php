<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlbumResource extends JsonResource
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
            'title' => $this->title
        // 'songs' => SongResource::collection($this->whenLoaded($this->songs)),
        // this->mergeWhen($this->songs->count > 10, ['new_attribute' => 'attribute value'])
        // ];
    }
}
