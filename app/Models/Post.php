<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Tags\HasTags;
class Post extends Model
{
    use HasFactory;
    use HasTags;

    protected $fillable = ['title', 'description', 'content', 'image', 'category_id'];

    protected $table = 'posts';

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
