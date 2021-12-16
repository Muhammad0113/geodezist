<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Menu;


class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public $menuItems;

    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $menu_list = Menu::all();
        $this->menuItems = $menu_list;

        view()->composer('layouts.header', function($view) {
            $view->with(['menus' => $this->menuItems]);
        });
    }
}
