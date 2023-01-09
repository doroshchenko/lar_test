<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasUuids;

    protected $fillable = ['uuid', 'name'];

    public function articles() {
        return $this->hasMany(Article::class);
    }
}
