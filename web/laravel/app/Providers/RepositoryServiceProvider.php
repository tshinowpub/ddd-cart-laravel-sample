<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use LaraCart\Shop\Infrastructure\Repositories\Domain\Eloquent\EloquentItemRepository;
use LaraCart\Shop\Infrastructure\Eloquents\EloquentItem;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(EloquentItemRepository::class, EloquentItem::class);
    }
}
