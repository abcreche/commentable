<?php

namespace ABCreche\Commentable\Tests;

use Orchestra\Testbench\TestCase;
use ABCreche\Commentable\CommentableServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [CommentableServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
