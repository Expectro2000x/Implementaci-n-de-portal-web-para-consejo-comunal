<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Noticia extends Model
{
    use HasFactory;
    /** Aquí se establece que los siguientes datos pueden ser subidos en masa a la base de datos,
     * esto a fin de mantener la protección contra la subida de información indebida por parte
     * de maliciosos terceros
    */
    protected $fillable = ['titulo', 'cuerpo'];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
