<?php

namespace ABCreche\Commentable;

use Illuminate\Database\Eloquent\Model;
use Dyrynda\Database\Support\GeneratesUuid;

class Commentable extends Model
{
    use GeneratesUuid, IsCommentable;

    protected $guarded = ['id'];

    protected $casts = [
        'is_public' => 'boolean',
        'metadata' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(app()->make(User::class), 'author_id');
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
