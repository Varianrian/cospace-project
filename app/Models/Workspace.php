<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Workspace extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    /**
     * The media collection name.
     *
     * @var string
     */
    const MEDIA_COLLECTION = 'workspace-images';

    protected $fillable = [
        'name',
        'price',
        'description',
        'address',
        'city',
        'maps',
        'rating_avg',
        'rating_count',
    ];

    protected $casts = [
        'rating_avg' => 'float',
    ];

    public function facilities()
    {
        return $this->belongsToMany(Facility::class, 'workspace_facilities');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection(self::MEDIA_COLLECTION)
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg']);
    }

}
