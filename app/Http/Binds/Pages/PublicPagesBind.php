<?php

namespace App\Http\Binds\Pages;

use App\Http\Binds\CltvoBind;
use App\Page;
use Route;

class PublicPagesBind extends CltvoBind
{

    /**
     * bind methods
     */
    public static function Bind(){
        // para las páginas
            Route::bind('public_page', function ($page_slug) {

                $page = Page::published()->getModelBySlug($page_slug)->get()->first();

                return $page && $page->translation()->slug == $page_slug ? $page : null;

            });

    }

}
