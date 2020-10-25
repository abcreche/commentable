<?php

namespace ABCreche\Commentable;

use ABCreche\Commentable\Commentable;

trait IsCommentable
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
