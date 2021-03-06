<?php namespace DanPowell\Things;

class ThingsServiceProvider extends \Illuminate\Support\ServiceProvider
{

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {

        //dd('fart');

        // // Merge configs
        $this->mergeConfigFrom(__DIR__ . '/../config/things.php', 'things');

        // // Tell Laravel where to load the views from
        //$this->app->register('DanPowell\Jellies\Providers\ViewComposerServiceProvider');

        // // Bind some simple services
        // $this->app->singleton('message', 'DanPowell\Jellies\Services\MessageService');

        // $this->app->bind('DanPowell\Jellies\Repositories\Logic\UserBattleLogicInterface', config('jellies.logic.classes.userbattle'));
        // $this->app->bind('DanPowell\Jellies\Repositories\Logic\BattleLogicInterface', config('jellies.logic.classes.battle'));
        // $this->app->bind('DanPowell\Jellies\Repositories\Logic\DamageLogicInterface', config('jellies.logic.classes.damage'));

        // //$loader = \Illuminate\Foundation\AliasLoader::getInstance();
        // $this->app->singleton('MathHelper', 'DanPowell\Jellies\Repositories\Helpers\MathHelper');
        // $this->app->singleton('MiscHelper', 'DanPowell\Jellies\Repositories\Helpers\MiscHelper');

    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'things');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'things');

        // Publish Frontend Assets
        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/things'),
        ], 'public');

        // Publish Views
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/things'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/things'),
        ], 'translations');

        // Publish Config
        $this->publishes([
            __DIR__ . '/../config' => config_path('things'),
        ], 'configs');

        // Publish Migrations
        $this->publishes([
            __DIR__ . '/../database/migrations' => $this->app->databasePath().'/migrations',
        ], 'migrations');

        // Publish Factories
        $this->publishes([
            __DIR__ . '/../database/factories' => $this->app->databasePath().'/factories',
        ], 'factories');

        // Publish Seeds
        $this->publishes([
            __DIR__ . '/../database/seeds' => $this->app->databasePath().'/seeds',
        ], 'seeds');

        // // Publish Tests
        // $this->publishes([
        //     __DIR__ . '/../tests' => base_path('tests'),
        // ], 'tests');

        // // Publishes all stuff for dev
        // $this->publishes([
        //     __DIR__ . '/../database' => $this->app->databasePath()
        // ], 'database');

    }
}
