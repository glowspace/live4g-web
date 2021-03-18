<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $dates = ['released_at'];

    public function show()
    {
        return $this->belongsTo(Show::class);
    }

    public function isLive()
    {
        if ($this->is_livestream && $this->released_at->diffInSeconds(Carbon::now()) < $this->duration_seconds)
        {
            return true;
        }

        return false;
    }

    public function isNew()
    {
        if ($this->released_at->diffInHours(Carbon::now()) < 24)
        {
            return true;
        }

        return false;
    }

    public function getPreviewURL()
    {
        $url = $this->youtube_url;

        // Get code from YT video URL
        $parts = explode('?v=', $url);
        $parts_final = explode('&', $parts[1]);
        $code = $parts_final[0];

        // Generate image URL
        return "https://img.youtube.com/vi/$code/mqdefault.jpg";
    }

    public function getDuration()
    {
        return round($this->duration_seconds / 60) . ':' . $this->duration_seconds % 60;
    }
}
