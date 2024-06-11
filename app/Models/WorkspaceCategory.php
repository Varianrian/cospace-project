<?php

namespace App\Models;

use App\Models\Workspace;
use App\Models\WorkspaceRoom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkspaceCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Model relationship definition.
     * WorkspaceCategory has many WorkspaceRooms
     *
     * @return HasMany
     */
    public function rooms(): HasMany
    {
        return $this->hasMany(WorkspaceRoom::class, 'workspace_category_id');
    }

    /**
     * Model relationship definition.
     * WorkspaceCategory belongs to many Workspaces
     *
     * @return BelongsToMany
     */
    public function workspaces(): BelongsToMany
    {
        return $this->belongsToMany(Workspace::class, 'workspace_rooms');
    }
}
