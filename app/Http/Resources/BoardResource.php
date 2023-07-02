<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BoardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return  [
            'title' => "타이틀 : " . $this->board_title,
            'content' => "컨텐트 : " . $this->board_content,
        ];

//        return parent::toArray($request);
    }
}