<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id_categorie';
    protected $fillable = ['nom_categorie', 'description'];

    // Relationship: One category has many offers
    public function offres()
    {
        return $this->hasMany(Offre::class, 'id_categorie', 'id_categorie');
    }
}
