<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
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
            "name" => $this->name,
            "email" => $this->email,
            "cargo" => $this->cargo,
            "cpf" => $this->cpf,
            "tipo" => $this->tipo,
            "dia" => $this->dia,
            "mes" => $this->mes,
            "ano" => $this->ano,
            "aniversario" => $this->dia . '/' . $this->mes,
            "foto" => $this->foto,
            "setor" => $this->setor
        ];
    }
}
