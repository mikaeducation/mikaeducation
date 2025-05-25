@props(['src'])

@php
    use Illuminate\Support\Str;

    $iframeSrc = null;
    $videoTagSrc = null;

    if (Str::contains($src, 'drive.google.com')) {
        preg_match('/\/d\/([a-zA-Z0-9_-]+)/', $src, $matches);
        $videoId = $matches[1] ?? null;
        if ($videoId) {
            $iframeSrc = "https://drive.google.com/file/d/{$videoId}/preview?autoplay=1";
        }
    } elseif (Str::contains($src, 'youtu.be')) {
        preg_match('/youtu\.be\/([a-zA-Z0-9_-]+)/', $src, $matches);
        $youtubeId = $matches[1] ?? null;
        if ($youtubeId) {
            $iframeSrc = "https://www.youtube.com/embed/{$youtubeId}?autoplay=1&rel=0&modestbranding=1";
        }
    } elseif (Str::contains($src, 'youtube.com/watch')) {
        preg_match('/v=([a-zA-Z0-9_-]+)/', $src, $matches);
        $youtubeId = $matches[1] ?? null;
        if ($youtubeId) {
            $iframeSrc = "https://www.youtube.com/embed/{$youtubeId}?autoplay=1&rel=0&modestbranding=1";
        }
    } elseif (Str::endsWith($src, ['.mp4', '.webm', '.ogg'])) {
        $videoTagSrc = $src;
    }
@endphp

@if ($iframeSrc)
    <iframe 
        class="w-full h-full object-fill rounded" 
        src="{{ $iframeSrc }}" 
        allow="autoplay; encrypted-media" 
        allowfullscreen
    ></iframe>
@elseif ($videoTagSrc)
    <video 
        class="w-full h-full object-fill rounded" 
        src="{{ $videoTagSrc }}" 
        autoplay 
        playsinline 
        controls 
        preload="metadata"
    >
        Browser Anda tidak mendukung pemutar video HTML5.
    </video>
@else
    <div class="text-red-500 text-lg">
        Konten atau video tidak ditemukan, link tidak valid.
    </div>
@endif
