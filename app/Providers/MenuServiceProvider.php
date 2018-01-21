<?php
namespace App\Providers;

use Menu;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        Menu::make('menu_tribuleftmenu', function($menu) {
            $menu->add('Home', '/');
            $menu->add('Blog', 'blog');
            $menu->add('About', 'about');
            $menu->add('Contact', 'contact');
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // 
    }
}