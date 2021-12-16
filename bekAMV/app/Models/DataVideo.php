<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataVideo extends Model
{
    use HasFactory;

    protected $table = 'data_videos';

    protected $fillable = ['name', 'title', 'link_video', 'viewer', 'social_media'];
}
