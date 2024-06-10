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

class Workspace extends Model
{
    use HasFactory;

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
}
