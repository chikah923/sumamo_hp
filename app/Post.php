<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

use App\Category;
use App\Tag;

class Post extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    protected $appends = [
        'photo',
    ];

    protected $fillable = ['category_id','title', 'description', 'content', 'image', 'published_at', 'user_id'];
    protected $dates = ['published_at'];


    public function deleteImage()
    {
        Storage::delete($this->image);

    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function hasTag($tagId)
    {
        return in_array($tagId, $this->tags->pluck('id')->toArray());
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', now());
    }

    public function scopeSearched($query)
    {
        $search = request()->query('search');

        if(!$search) { return $query->published(); }
        else { return $query->published()->where('title', 'LIKE' ,"%{$search}%"); }
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


