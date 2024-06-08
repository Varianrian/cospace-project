<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkspaceFacility extends Model
{
    use HasFactory;

    protected $fillable = [
        'workspace_id',
        'facility_id',
    ];

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}
