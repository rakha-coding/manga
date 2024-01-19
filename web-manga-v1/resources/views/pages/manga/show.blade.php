@extends('layouts.main')

@section('title')
    {{ $manga['title'] }}
@endsection

@section('content')
    <div class="px-4 py-4">
        <div class="flex gap-4 justify-between">
            <img src="{{ $manga['images']['webp']['large_image_url'] }}" alt=" {{ $manga['title'] }}" class="h-80 rounded-lg">
            <div class="bg-white opacity-50 p-4 rounded-lg w-[300px]">
                <p class="font-bold">Judul: @foreach ($manga['titles'] as $item)
                        {{ $item['title'] }},
                    @endforeach
                </p>
                <p class="font-bold">Chapters: {{ $manga['chapters'] }} </p>
                <p class="font-bold">Volume: {{ $manga['volumes'] }} </p>
                <p class="font-bold">Jenis Komik: {{ $manga['type'] }} </p>
                <p class="font-bold">Genre: @foreach ($manga['genres'] as $genre)
                        {{ $genre['name'] }},
                    @endforeach
                </p>
                <p class="font-bold">Status: {{ $manga['status'] }} </p>
                <p class="font-bold">Favorite: {{ $manga['favorites'] }} </p>
                <p class="font-bold">Score: {{ $manga['score'] }} </p>
            </div>
        </div>
        <h1 class="text-white font-bold text-2xl mt-4"> {{ $manga['title'] }} </h1>
        <p class="text-white"> {{ $manga['synopsis'] }} </p>
    </div>
@endsection
