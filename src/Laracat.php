<?php

namespace Andrisan\Laracat;

use Illuminate\Support\Facades\Http;

class Laracat
{
    public function getCat(): string
    {
        $response = Http::get('https://api.thecatapi.com/v1/images/search');
        $imgUrl = $response->json()[0]['url'];
        // return html img
        return '<img src="' . $imgUrl . '" alt="cat" />';
    }
}
