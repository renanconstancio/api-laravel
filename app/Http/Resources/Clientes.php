<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Clientes extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request)
  {
    return parent::toArray($request);
    // return [
    //   'id' => $this->id,
    //   'titulo' => $this->titulo,
    //   'conteudo' => $this->conteudo
    // ];
  }
}