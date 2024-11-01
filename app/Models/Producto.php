<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $cantidad
 * @property $precio
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 * @property $proveedores_id
 * @property $categorias_id
 * @property $compras_id
 *
 * @property Categoria $categoria
 * @property Compra $compra
 * @property Proveedore $proveedore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'cantidad', 'precio', 'proveedores_id', 'categorias_id', 'compras_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria()
    {
        return $this->belongsTo(\App\Models\Categoria::class, 'categorias_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function compra()
    {
        return $this->belongsTo(\App\Models\Compra::class, 'compras_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedore()
    {
        return $this->belongsTo(\App\Models\Proveedore::class, 'proveedores_id', 'id');
    }
    
}
