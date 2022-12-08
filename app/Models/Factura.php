<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function cliente()
    {
        return $this->belongsTo(User::class);
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
    public function traslado()
    {
        return $this->belongsTo(Traslado::class);
    }
}
