<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'descripcion',
        'fecha',
        'total',
        'total_ganancia',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function yerbas()
    {
        return $this->belongsToMany(Yerba::class, 'detalle_venta')
            ->withPivot('cantidad', 'subtotal', 'ganancia', 'precio_compra', 'precio_venta');
    }
}
