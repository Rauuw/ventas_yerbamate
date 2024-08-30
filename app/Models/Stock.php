<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad',
    ];

    public function yerba()
    {
        return $this->hasOne(Yerba::class);
    }
}
