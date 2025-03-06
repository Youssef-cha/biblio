<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    /** @use HasFactory<\Database\Factories\LivreFactory> */
    use HasFactory;
    protected $fillable = [
        "nom_livre",
        "nom_auteur",
        "description",
        "date_pub",
        "categorie_id",
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
