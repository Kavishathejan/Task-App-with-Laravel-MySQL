<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task',
        'user_id',
        'isCompleted',
    ];

    // Default value
    protected $attributes = [
        'isCompleted' => 0,
    ];

    // Task belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
