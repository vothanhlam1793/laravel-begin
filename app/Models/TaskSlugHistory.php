<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskSlugHistory extends Model
{
    // use HasFactory;
    protected $fillable = ['task_id', 'old_slug', 'new_slug'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
