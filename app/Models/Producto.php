<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Define qué campos son asignables masivamente.
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'imagen',
        // otros campos que necesites
    ];

    // O define qué campos no son asignables masivamente.
    // protected $guarded = [];

    // Casts para asegurarse de que los campos se manejan como tipos específicos.
    protected $casts = [
        'precio' => 'float',
        // otros casts que necesites
    ];

    // Una relación ficticia como ejemplo, reemplaza con relaciones reales.
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    // Un método personalizado como ejemplo.
    public function formatearPrecio()
    {
        return '$' . number_format($this->precio, 2);
    }

    // Un scope de consulta para filtrar productos por un precio mínimo.
    public function scopePrecioMinimo($query, $precio)
    {
        return $query->where('precio', '>=', $precio);
    }
}