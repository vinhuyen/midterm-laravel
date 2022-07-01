<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
    use HasFactory;
    protected $table = 'vegetables';
    protected $fillable = ['vegetable', 'new_price', 'category_id', 'image'];

    public function producer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {

        return $this->belongsTo(Vegetable::class, 'category_id', 'category_id');

    }
}
