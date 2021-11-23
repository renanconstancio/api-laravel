<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
  protected $table = 'clientes';

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'senha', 'excluir', 'admin'
  ];

  // protected $fillable = ['nome', 'email'];

  /**
   * Get the comments for the blog post.
   */
  public function enderecos()
  {
    return $this->hasMany(ClientesEnderecos::class, 'id_clientes');
  }
}
