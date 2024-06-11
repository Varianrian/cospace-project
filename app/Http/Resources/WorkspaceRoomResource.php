<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkspaceRoomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        $this->resource->image = $this->resource->getMediaUrlsAttribute();
        if ($this->resource->media != null) {
            unset($this->resource->media);
        }
        return parent::toArray($request);
    }
}
