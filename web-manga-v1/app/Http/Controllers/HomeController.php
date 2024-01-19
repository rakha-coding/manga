<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $baseUrlApi = env('BASE_URL_API');

        $response = Http::get($baseUrlApi . '/top/manga');
        $datas = $response->json();

        return view('pages.home.index', ['datas' => $datas]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'search' => 'sometimes|required|string',
        ]);

        $baseUrlApi = env('BASE_URL_API');
        $searchInput = $request->input('search');

        $response =  Http::get($baseUrlApi . '/manga', [
            'q' => $searchInput
        ]);

        $datas = $response->json();

        return view('pages.search.index', ['datas' => $datas]);
    }
}
