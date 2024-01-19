@extends('layouts.main')

@section('title')
    {{ request('search') }}
@endsection

@section('content')
    <div class="flex justify-between items-center px-4 py-4">
        <h1 class="text-white font-bold text-2xl">Hasil pencarian dari "{{ request('search') }}" </h1>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 px-4">
        @foreach ($datas['data'] as $item)
            <div class="pb-4">
                <a href="{{ url("/manga/{$item['mal_id']}") }}">
                    <img src={{ $item['images']['webp']['image_url'] }} alt={{ $item['title'] }}
                        class="h-72 w-full bg-cover object-cover rounded-lg hover:scale-105 transition-all">
                </a>
                <div class="px-2 mt-2">
                    <a href="{{ url("/manga/{$item['mal_id']}") }}">
                        <h1 class="font-bold text-white hover:text-[#9BBEC8] transition-all"> {{ $item['title'] }} </h1>
                    </a>
                    @if (isset($item['chapters']))
                        <small class="text-white">chapter {{ $item['chapters'] }} </small>
                    @else
                        <small class="text-white">chapters ❓</small>
                    @endif
                    <br>
                    @if (isset($item['score']))
                        <small class="text-yellow-500">Score {{ $item['score'] }} </small>
                    @else
                        <small class="text-white">Score ❓</small>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection
