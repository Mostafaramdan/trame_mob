<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MenuServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot(Request $request)
  {
    $currentUrl = $request->path();
    $prefix = Str::startsWith($currentUrl, 'theme/')?"theme/menu":"menu";
    $verticalMenuJson = file_get_contents(base_path("resources/{$prefix}/verticalMenu.json"));
        $verticalMenuData = json_decode($verticalMenuJson);

    // Share all menuData to all the views
    View::share('menuData', [$verticalMenuData]);
  }
}
