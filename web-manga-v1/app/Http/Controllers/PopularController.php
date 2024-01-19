<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class PopularController extends Controller
{
    public function index()
    {
        $baseUrlApi = env('BASE_URL_API');

        // Menentukan halaman yang diminta (menggunakan query parameter 'page')
        $currentPage = request('page', 1);

        // Mengirimkan permintaan ke API dengan paginasi
        $response = Http::get($baseUrlApi . '/top/manga', [
            'page' => $currentPage,
        ]);

        // Mendapatkan data dan informasi paginasi dari respons API
        $apiData = $response->json();
        $mangaData = $apiData['data'];
        $paginationInfo = $apiData['pagination'];

        // Memeriksa apakah paginasi sudah diaktifkan pada respons API
        $paginator = new LengthAwarePaginator(
            $mangaData,
            $paginationInfo['items']['total'],
            $paginationInfo['items']['per_page'],
            $currentPage,
            ['path' => LengthAwarePaginator::resolveCurrentPath()]
        );

        return view('pages.popular.index', [
            'mangaData' => $paginator,
        ]);
    }
}
