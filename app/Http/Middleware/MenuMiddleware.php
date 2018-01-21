<?php

namespace App\Http\Middleware;

use Closure;
use Menu;
class MenuMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		    Menu::make('tribumenu', function($menu) {
            $menu->add('Dashboard', '/');
            $menu->add('Charts', '/charts');
 			$menu->charts->add('Americano', '/charts/americano');
				$menu->charts->add('Breve', '/charts/breve');
				$menu->charts->add('Cappuccino', '/charts/cappuccino');
	
					  
		
        $menu->charts->add('Latte', '/charts/latte');
            $menu->add('Tables', '/tables');
            $menu->add('Contact Me', '/contact-me');
        });

        return $next($request);
    }
}
