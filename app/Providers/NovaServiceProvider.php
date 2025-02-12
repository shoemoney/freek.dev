<?php

namespace App\Providers;

use App\Nova\Ad;
use App\Nova\Link;
use App\Nova\Post;
use App\Nova\Tag;
use App\Nova\Talk;
use App\Nova\User;
use App\Nova\Video;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    protected function routes()
    {
        Nova::routes();
    }

    protected function gate()
    {
        Gate::define('viewNova', function (\App\Models\User $user) {
            return $user->admin;
        });
    }

    protected function cards()
    {
        return [

        ];
    }

    public function tools()
    {
        return [
        ];
    }

    protected function resources()
    {
        Nova::resources([
            Post::class,
            Link::class,
            Talk::class,
            Video::class,
            Ad::class,
            Tag::class,
            User::class,
        ]);
    }
}
