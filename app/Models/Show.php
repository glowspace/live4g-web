<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Show extends Model
{
    use HasFactory;

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

    public function getSlug()
    {
        return Str::slug($this->name);
    }

    public function getPublicRoute()
    {
        return route('public.show', [
            'show_slug' => $this->getSlug(),
        ]);
    }
}
