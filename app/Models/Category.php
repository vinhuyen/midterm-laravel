<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable = ['category_name'];


    public function phones (): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Http\Models\Vegetable');
    }
}
