<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasUuids;

    protected $fillable = [
        'name',
        'category_id',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Cagegory::class, 'foreign_key');
    }
}