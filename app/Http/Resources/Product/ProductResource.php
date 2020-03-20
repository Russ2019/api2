<?php

namespace App\Http\Resources\Product;

// use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Http\Resources\Json\JsonResource;

// class ProductResource extends Resource
class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->detail,
            'price' => $this->price,
            'stock' => $this->stock,
            'discount' =>$this->discount,
        ];
    }
}
