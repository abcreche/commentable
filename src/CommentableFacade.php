<?php

namespace ABCreche\Commentable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ABCreche\Commentable\Skeleton\SkeletonClass
 */
class CommentableFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'commentable';
    }
}
