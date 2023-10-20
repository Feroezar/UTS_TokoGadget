<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class handphone extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    public function modelhp()
    {
        return $this->belongsTo(modelhp::class);
    }
    protected $fillable = [
        'image',
        'merk',
        'kategori',
        'harga',
        'stok',
    ];
}
