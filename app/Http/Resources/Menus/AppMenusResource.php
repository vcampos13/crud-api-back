<?php

namespace App\Http\Resources\Menus;

use Illuminate\Http\Resources\Json\JsonResource;

class AppMenusResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'color'         => $this->color,
            'icon'          => $this->icon,
            'title'         => $this->title,
            'destination'   => $this->destination,
            'app_menus_id'  => $this->app_menus_id,
        ];
    }
}
