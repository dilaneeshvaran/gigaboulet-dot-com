<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;

    // La table associée à ce modèle.
    protected $table = 'post_tag';

    // Définir les relations avec les autres modèles
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }
}
