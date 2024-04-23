<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BusinessController;

class UserTypeRouter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        // dd($user);

        if ($user) {
            $userType = $user->user_type;

            $controllerMethod = $this->getControllerMethodForUserType($userType);
            // dd($controllerMethod);
            if ($controllerMethod) {
                // dd($controllerMethod);
                return $controllerMethod;
            }
        }


        return $next($request);
    }
    protected function getControllerMethodForUserType($userType)
    {

        switch ($userType) {
            case 'admin':
                // dd($userType);
                $controller = app(BusinessController::class)->dashboard();
                break;
            case 'customer':
                $controller = app(HomeController::class)->dashboard();
                // return $controller;
                break;
            case 'client_customer':
                $controller = app(HomeController::class)->dashboard();
                // return $controller;
                break;
                // Add more cases for other user types as needed
            default:
                return null;
        }
    }
}
