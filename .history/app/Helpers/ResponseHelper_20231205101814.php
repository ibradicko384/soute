<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Redirect;

class ResponseHelper
{
    /**
     * Redirige avec un message de succès.
     *
     * @param string $route
     * @param string $message
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function redirectWithSuccess($route, $message): \Illuminate\Http\RedirectResponse
    {
        return Redirect::route($route)->with('success', $message);
    }
}