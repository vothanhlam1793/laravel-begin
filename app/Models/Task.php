<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Models\TaskSlugHistory;

class Task extends Model
{
    // use HasFactory;
    use HasSlug;

    public function getSlugOptions() : SlugOptions {
        return SlugOptions::create()
        ->generateSlugsFrom('name')
        ->saveSlugsTo('slug');
    }

    public function slugHistories()
    {
        return $this->hasMany(TaskSlugHistory::class);
    }

    // Thêm một phương thức để lấy slug hiện tại của task
    public function getCurrentSlug()
    {
        return $this->slugHistories()->latest()->value('new_slug') ?? $this->slug;
    }
}
