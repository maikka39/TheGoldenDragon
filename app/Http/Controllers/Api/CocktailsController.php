<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CocktailsController extends Controller
{
    public function search(Request $request, $search)
    {
        $response = Http::get("www.thecocktaildb.com/api/json/v1/1/search.php", [
            "s" => $search
        ]);

        return $response->json();
    }
}
