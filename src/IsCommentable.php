<?php

namespace ABCreche\Commentable;

use ABCreche\Commentable\Commentable;

trait isCommentable
{
    /**
     * Set the polymorphic relation.
     *
     * @return mixed
     */
    public function comments()
    {
        return $this->morphMany(Commentable::class, 'commentable');
    }
}
