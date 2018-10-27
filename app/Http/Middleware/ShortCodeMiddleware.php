<?php

namespace App\Http\Middleware;

use App\Domain\Article\Queries\GetAllArticlesQuery;
use Closure;
use Illuminate\Http\Response;
use Illuminate\Foundation\Bus\DispatchesJobs;

class ShortCodeMiddleware
{
    use DispatchesJobs;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /** @var $response Response */
        $response = $next($request);

        if ( ! method_exists($response, 'content')) {
            return $response;
        }

//        $content = preg_replace_callback_array(
//            [
//                '#(<p(.*)>)?{blog}(<\/p>)?#' => function () {
//                    $articles = $this->dispatch(new GetAllArticlesQuery(true));
//
//                    return view('layouts.shortcodes.articles', ['articles' => $articles]);
//                }
//            ],
//            $response->content()
//        );
//
//        $response->setContent($content);

        return $response;
    }
}
