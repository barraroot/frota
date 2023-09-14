<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Marca extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get all of the modelos for the Marca
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modelos(): HasMany
    {
        return $this->hasMany(Modelo::class);
    }
}
