<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use MichaelDojcar\LaravelPhoto\Models\Photo;

class Show extends Model
{
    use HasFactory;

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

    public function released_episodes()
    {
        return $this->episodes()
            ->where('released_at', '<=', Carbon::now());
    }

    public function getSlug()
    {
        return Str::slug($this->name);
    }

    public function getPublicRoute()
    {
        return route('public.show', [
            'show_slug' => $this->name_slug,
        ]);
    }

    public function photoThumb()
    {
        return $this->belongsTo(Photo::class, 'photo_thumb');
    }

    public function photoPanorama()
    {
        return $this->belongsTo(Photo::class, 'photo_panorama');
    }
}
