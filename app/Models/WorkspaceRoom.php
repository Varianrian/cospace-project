<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkspaceRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'workspace_id',
        'name',
        'price',
        'capacity',
        'workspace_category_id'
    ];

    public function workspaceCategory()
    {
        return $this->belongsTo(WorkspaceCategory::class);
    }

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }
}
