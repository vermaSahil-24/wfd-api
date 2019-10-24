<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['name', 'type'];

    protected $guarded = [];

    protected $with = ['supplier'];

    public function ingredient()
    {
        return $this->hasMany(Ingredient::class);
    }
}
