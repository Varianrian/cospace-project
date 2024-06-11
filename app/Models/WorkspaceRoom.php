<?php

namespace App\Models;

use App\Models\Review;
use App\Models\User;
use App\Models\Workspace;
use App\Models\WorkspaceCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class WorkspaceRoom extends Model implements HasMedia
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
        'id',
        'workspace_id',
        'name',
        'price',
        'capacity',
        'workspace_category_id',
    ];

    /**
     * Model relationship definition.
     * WorkspaceRoom has many Reviews
     *
     * @return HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'workspace_room_id');
    }

    /**
     * Model relationship definition.
     * WorkspaceRoom belongs to many Users
     *
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'reviews');
    }

    /**
     * Model relationship definition.
     * WorkspaceRoom belongs to Workspace
     *
     * @return BelongsTo
     */
    public function workspace(): BelongsTo
    {
        return $this->belongsTo(Workspace::class);
    }

    /**
     * Model relationship definition.
     * WorkspaceRoom belongs to WorkspaceCategory
     *
     * @return BelongsTo
     */
    public function workspaceCategory(): BelongsTo
    {
        return $this->belongsTo(WorkspaceCategory::class);
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
