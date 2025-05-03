@props(['src']) 

@php
    // Ambil ID video dari link Google Drive
    preg_match('/\/d\/([a-zA-Z0-9_-]+)/', $src, $matches);
    $videoId = $matches[1] ?? null;
@endphp

@if ($videoId)
    <iframe 
        class="w-full h-full object-fill rounded" 
        src="https://drive.google.com/file/d/{{ $videoId }}/preview" 
        allow="autoplay" 
        allowfullscreen
    ></iframe>
    @else
    <div class="text-red-500 text-lg">Konten atau video tidak ditemukan, link tidak valid.</div>
@endif
