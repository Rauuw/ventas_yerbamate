<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;

    protected $fillable = [
        'venta_id',
        'yerba_id',
        'cantidad',
        'subtotal',
        'ganancia',
        'precio_compra',
        'precio_venta',
    ];

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }

    public function yerba()
    {
        return $this->belongsTo(Yerba::class);
    }
}
