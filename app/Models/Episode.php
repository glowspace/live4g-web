<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
        if (!$this->is_livestream) {
            return false;
        }

        $seconds_since_release = $this->released_at->diffInSeconds(Carbon::now());
        $livestream_in_progress = $seconds_since_release < $this->duration_seconds;

        $livestream_released = $this->released_at <= Carbon::now();

        if ($livestream_released && $livestream_in_progress) {
            return true;
        }

        return false;
    }

    public function isNew()
    {
        if ($this->released_at->diffInHours(Carbon::now(), false) < 168) {
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

    public function getEmbedURL()
    {
        $url = $this->youtube_url;

        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

        if (preg_match($longUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        if (preg_match($shortUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        return 'https://www.youtube.com/embed/' . $youtube_id . '?autoplay=1&rel=0';
    }

    public function getDuration()
    {
        if ($this->duration_seconds >= 3600) {
            return gmdate("G:i:s", $this->duration_seconds);
        } else {
            return gmdate("i:s", $this->duration_seconds);
        }
    }

    public function getPublicRoute()
    {
        return route('public.episode', [
            'show_slug' => $this->show->name_slug,
            'episode_slug' => $this->name_slug
        ]);
    }

    private function getSlug()
    {
        return Str::slug($this->name);
    }
}
