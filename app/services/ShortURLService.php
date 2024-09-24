<?php

namespace App\services;

use AshAllenDesign\ShortURL\Classes\Builder;

class ShortURLService
{
    public function generateShortURL($longURL)
    {
        $randomKey = date('His');
        $shortURLObject = app(Builder::class)->destinationUrl($longURL)->urlKey($randomKey)->make();
        $shortURL = $shortURLObject->default_short_url;
        return $shortURL;
    }

    public function deleteShortURL($shortURL)
    {
        $shortURL->delete();
        return true;
    }
}
