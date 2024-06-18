<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();

        self::saving(function ($review) {
            if ($review->is_approved) {
                $review->approved_at = now();
            }
        });
    }

    protected $fillable = [
        'workspace_room_id',
        'user_id',
        'rating',
        'comment',
        'is_approved',
        'approved_at'
    ];

    protected $casts = [
        'is_approved' => 'boolean',
        'approved_at' => 'datetime',
    ];

    public function workspaceRoom()
    {
        return $this->belongsTo(WorkspaceRoom::class);
    }

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }
}
