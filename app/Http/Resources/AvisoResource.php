<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UsuarioResource;

class AvisoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "titulo" => $this->titulo,
            "texto" => $this->texto,
            "usuario" => new UsuarioResource($this->usuario),
            "data_criacao" => $this->created_at
        ];
    }
}
