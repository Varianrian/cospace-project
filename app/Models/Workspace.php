<?php

namespace App\Models;

use App\Models\Facility;
use App\Models\WorkspaceCategory;
use App\Models\WorkspaceFacility;
use App\Models\WorkspaceRoom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
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

    /**
     * Model relationship definition.
     * Workspace belongs to many Facilities
     *
     * @return BelongsToMany
     */
    public function facilities(): BelongsToMany
    {
        return $this->belongsToMany(Facility::class, 'workspace_facilities');
    }

    /**
     * Model relationship definition.
     * Workspace belongs to many WorkspaceCategories
     *
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(WorkspaceCategory::class, 'workspace_rooms');
    }

    /**
     * Model relationship definition.
     * Workspace has many WorkspaceFacilities
     *
     * @return HasMany
     */
    public function workspaceFacilities(): HasMany
    {
        return $this->hasMany(WorkspaceFacility::class, 'workspace_id');
    }

    /**
     * Model relationship definition.
     * Workspace has many WorkspaceRooms
     *
     * @return HasMany
     */
    public function rooms(): HasMany
    {
        return $this->hasMany(WorkspaceRoom::class, 'workspace_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection(self::MEDIA_COLLECTION)
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg']);
    }

    public function getFirstMediaUrlAttribute(): string
    {
        return $this->getFirstMediaUrl(self::MEDIA_COLLECTION);
    }

    public function getMediaUrlsAttribute(): array
    {
        return $this->getMedia(self::MEDIA_COLLECTION)->map(function ($media) {
            return $media->getUrl();
        })->toArray();
    }
}
