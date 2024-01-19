<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MangaController extends Controller
{
    public function show($id)
    {
        $baseUrlApi = env('BASE_URL_API');

        $response = Http::get($baseUrlApi . "/manga/$id");
        $mangaData = $response->json();

        $manga = $mangaData['data'];

        return view('pages.manga.show', ['manga' => $manga]);
    }
}
