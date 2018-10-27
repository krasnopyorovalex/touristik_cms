<?php

namespace App\Http\Middleware;

use App\Domain\Redirect\Queries\GetRedirectByUriQuery;
use App\Redirect;
use Closure;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CheckRedirectDb
 * @package App\Http\Middleware
 */
class CheckRedirectDb
{
    use DispatchesJobs;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /**
         * @var $existedInDb Redirect
         */
        $existedInDb = $this->dispatch(new GetRedirectByUriQuery($request->getRequestUri()));

        if ($existedInDb) {
           return redirect($existedInDb->url_new, 301);
        }

        return $next($request);
    }
}
