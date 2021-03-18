<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    public function show()
    {
        return $this->belongsTo(Show::class);
    }

    public function getPreviewURL()
    {
        $url = $this->url;

        // Get code from YT video URL
        $parts = explode('?v=', $url);
        $parts_final = explode('&', $parts[1]);
        $code = $parts_final[0];

        // Generate image URL
        return "https://img.youtube.com/vi/$code/mqdefault.jpg";
    }
}
