<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkspaceCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function workspaces()
    {
        return $this->hasMany(Workspace::class);
    }

    public function rooms()
    {
        return $this->hasMany(WorkspaceRoom::class);
    }
}
