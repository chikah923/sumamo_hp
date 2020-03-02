<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;


class Profile extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    protected $guarded = [];

    protected $appends = [
        'photo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(100)->height(100);
    }

    public function getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }

}
