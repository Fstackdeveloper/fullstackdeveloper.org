<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Settings;
use App\Events\AdminBoot;
use App\AdminMenu;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		Schema::defaultStringLength(191);
		
		if (! $this->app->runningInConsole())
		{
			//App is not running in CLI context
			// Do HTTP-specific stuff here
			
			view()->composer('*', function ($view) {

			$current_route_name = \Request::route()->getName();

        	$ViewShareVariables = Array();
			$AdminMenu = new AdminMenu;

			$AdminMenu->setNewObjectVariablesForParents($AdminMenu->getIdByPath($current_route_name), Array ('active'=>True));
			
			$ViewShareVariables['adminmenu'] = $AdminMenu->getAllNodes();
			$ViewShareVariables['settings'] = Settings::get_settings();
		   	View::share($ViewShareVariables);
					});
			
		   event(new AdminBoot());
		}
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
