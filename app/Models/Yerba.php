<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yerba extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'stock_id',
    ];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    public function ventas()
    {
        return $this->belongsToMany(Venta::class, 'detalle_venta')
            ->withPivot('cantidad', 'subtotal', 'ganancia', 'precio_compra', 'precio_venta');
    }
}
