<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('public/assets/css/style.css')
    </head>
    <body class="font-futura h-max w-full relative">

    @include('includes.components.elearning.header')
        
        <section class="w-full h-max flex flex-col items-center justify-center relative">
            <div class="w-3/4 flex items-center justify-center">
                <div class="w-full lg:h-96 md:h-64 h-56 flex items-end justify-center relative rounded">
                    <div class="flex flex-col items-center justify-center w-5/6 h-full mb-3 gap-4 absolute z-10 text-white">
                        <h1 id="module-title" class="text-2xl md:text-3xl lg:text-4xl text-center font-semibold">{{ $module->module_title }}</h1>
                        <div class="w-full h-fit text-white text-sm md:text-base lg:text-lg font-medium flex items-center justify-center" style="display: inline-flex; flex-wrap: wrap;">
                            <a href="/" class="flex items-center">Beranda
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#fff" viewBox="0 0 24 24">
                                    <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                                </svg>
                            </a>
                            <a href="/learn" class="flex items-center">Program Pembelajaran
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#fff" viewBox="0 0 24 24">
                                    <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                                </svg>
                            </a>
                            <a href="#" class="flex items-center">Detail Pembelajaran</a>
                        </div>
                    </div>
                    <div class="w-full h-full absolute z-0 bg-blue31 bg-opacity-70 rounded"></div>
                    <img id="module_publisher_banner" src="{{ asset($module->module_publisher_banner) }}" alt="" class="w-full h-full object-cover rounded">
                </div>
            </div>
        </section>
        <section class="w-full h-max flex items-center justify-center mt-10">
            <div class="w-3/4 h-fit lg:flex items-start justify-center text-blue31 gap-8 md:gap-12 lg:gap-14 xl:gap-16 space-y-14 lg:space-y-4">
                <div class="w-full lg:w-2/3 h-full flex flex-col items-start justify-start text-justify text-base lg:text-lg gap-8 lg:gap-6 xl:gap-8">
                    <div class="flex flex-col items-start justify-start gap-2">
                        <h2 class="font-medium text-lg md:text-xl lg:text-2xl">Tentang Pembelajaran</h2>
                        <p id="modul-description">{{ $module->module_description }}</p>
                    </div>                    
                    <div id="modul-learning-points" class="flex flex-col items-start justify-start gap-2">
                        <h2 class="font-medium text-lg md:text-xl lg:text-2xl">Apa saja yang akan Dipelajari</h2>
                        <div id="learning-points" class="w-full h-fit">
                            @if (!empty($module->module_point))
                                @foreach ($module->module_point as $index => $point)
                                <div id="point{{ $index + 1 }}" class="w-full flex items-start h-fit gap-2">
                                    <div class="w-7 h-7">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                                            <path d="M19.5478 10.8314C20.2473 9.8946 20.1213 8.51386 19.2664 7.74741C18.4115 6.98096 17.1514 7.11903 16.452 8.0558L8.70471 18.4318L5.24944 15.4028C4.38691 14.6467 3.12835 14.7999 2.43833 15.745C1.74832 16.6902 1.88817 18.0692 2.75068 18.8254L6.97832 22.5315C8.26201 23.6568 10.1332 23.4404 11.1742 22.0462L19.5478 10.8314Z" stroke="#31587C" stroke-linecap="round"/>
                                            <path d="M27.5227 10.8314C28.2611 9.8946 28.1281 8.51386 27.2257 7.74741C26.3233 6.98096 24.9932 7.11903 24.2549 8.0558L16.0772 18.4318L12.43 15.4028C11.5195 14.6467 10.191 14.7999 9.46268 15.745C8.73433 16.6902 8.88195 18.0692 9.79238 18.8254L14.2549 22.5315C15.6099 23.6568 17.585 23.4404 18.6839 22.0462L27.5227 10.8314Z" fill="white" stroke="#31587C" stroke-linecap="round"/>
                                        </svg> 
                                    </div>
                                    <p id="module-point" class="w-full">{{ $point }}</p>
                                </div>
                                @endforeach
                            @else
                                <p class="text-gray-500 italic">Belum ada poin pembelajaran.</p>
                            @endif
                        </div>
                    </div>
                    <div id="modul-curriculum" class="w-full flex flex-col items-start justify-start gap-2">
                        <div class="w-full flex items-center justify-between font-medium text-lg md:text-xl lg:text-2xl">
                            <h2>Kurikulum Pembelajaran</h2>
                            <h4 id="submodul-num" class="text-base md:text-lg lg:text-xl">{{ $module->mainSubject_num }} Materi Utama<span class=" opacity-50">/Sub-Modul</span> </h4>
                        </div>
                        <div id="submodul-list" class="w-full h-fit space-y-4">
                            @foreach ($module->subjects as $index => $subject)
                                @php
                                    $submodulId = 'submodul' . ($index + 1);
                                    $pointsId = $submodulId . '-points';
                                    $titleId = $submodulId . '-title';
                                @endphp
                        
                                <div id="{{ $submodulId }}" class="w-full h-fit mt-2 p-6 gap-4 flex flex-col items-center justify-start content-shadows rounded">
                                    <button onclick="toggleSubmodul('{{ $pointsId }}', this)" class="w-full flex items-center justify-between font-medium text-lg">
                                        <h3 id="{{ $titleId }}">Materi {{ $index + 1 }}: {{ $subject->submodule_title }}</h3>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#31587C" viewBox="0 0 24 24"
                                            class="transition-transform duration-300 ease-in-out rotate-0">
                                            <path d="M4.707 8.293a1 1 0 0 1 1.414 0L12 14.586l5.879-6.293a1 1 0 1 1 1.414 1.414L12 17l-7.293-7.293a1 1 0 0 1 0-1.414z" />
                                        </svg>
                                    </button>
                        
                                    <div id="{{ $pointsId }}" class="w-full pt-4 border-t-2 border-bluee3 space-y-2 hidden">
                                        @foreach ($subject->submodules as $pointIndex => $point)
                                            @php $pointId = $submodulId . '-point' . ($pointIndex + 1); @endphp
                                            <div id="{{ $pointId }}" class="w-full flex items-start h-fit gap-2">
                                                <div class="w-6 h-6">
                                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                                                        <path d="M20.9534 12V17C20.9534 18.8856 20.9534 19.8284 20.3676 20.4142C19.7818 21 18.839 21 16.9534 21H7.45337C6.07266 21 4.95337 19.8807 4.95337 18.5V18.5C4.95337 17.1193 6.07266 16 7.45337 16H16.9534C18.839 16 19.7818 16 20.3676 15.4142C20.9534 14.8284 20.9534 13.8856 20.9534 12V7C20.9534 5.11438 20.9534 4.17157 20.3676 3.58579C19.7818 3 18.839 3 16.9534 3H8.95337C7.06775 3 6.12494 3 5.53916 3.58579C4.95337 4.17157 4.95337 5.11438 4.95337 7V18.5" stroke="#31587C" stroke-width="2"/>
                                                        <path d="M9.95337 10L11.2463 11.2929C11.6368 11.6834 12.27 11.6834 12.6605 11.2929L15.9534 8" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>                                                
                                                </div>
                                                <p class="w-full">{{ $point->submoduleSubject_title }}: {{ $point->submoduleSubject_description }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 h-fit flex flex-col items-start justify-center gap-8">
                    <div class="flex flex-col items-center justify-center w-full h-fit space-y-3 xl:space-y-5 rounded content-shadows pb-10">
                        <div class="w-full h-fit lg:h-[150px] xl:h-[200px] flex items-end justify-center rounded-t relative cursor-pointer">
                            <video id="modul-teaser" class="w-full h-full object-cover rounded-t" autoplay playsinline>
                                <source src="{{ asset('videos/MIKA-tesear.mp4') }}" type="video/mp4">
                            </video>
                            <div class="absolute bottom-1 right-8">
                                <button id="playBtn" class="opacity-80">
                                    <svg width="17" height="17" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.588 5.65869L4.1587 0.314698C2.24805 -0.664326 0 0.759506 0 2.94867V13.0513C0 15.2405 2.24805 16.6643 4.1587 15.6853L14.588 10.3413C16.4707 9.37664 16.4707 6.62336 14.588 5.65869Z" fill="#fff"/>
                                    </svg>                                    
                                </button>
                                <button id="PauseBtn" class="opacity-80">
                                    <svg width="20" height="20" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="7.5" y="6.25" width="5" height="17.5" rx="1" fill="#fff"/>
                                        <rect x="17.5" y="6.25" width="5" height="17.5" rx="1" fill="#fff"/>
                                    </svg>                                                                     
                                </button>
                            </div> 
                        </div>
                        @php
                            $progress = DB::table('progress_tracking')
                                ->where('user_id', auth()->id())
                                ->where('module_id', $module->module_id)
                                ->latest('created_at')
                                ->first();

                            $moduleRepeatable = $module->module_type;
                            $buttonLabel = null;
                            $buttonLink = null;

                            if (!$progress) {
                                $buttonLabel = 'Mulai Belajar';
                                $buttonLink = 'startButton';
                            } elseif ($progress->is_completed && $moduleRepeatable) {
                                $buttonLabel = 'Belajar Lagi';
                                $buttonLink = 'startButton';
                            } elseif (!$progress->is_completed) {
                                $buttonLabel = 'Lanjutkan Belajar';
                                $buttonLink = 'startButton';
                            } elseif ($progress->is_completed && !$moduleRepeatable) {
                                $buttonLabel = 'Lihat Riwayat Belajar';
                                $buttonLink = url('/preLearn'); // ⬅️ diarahkan ke preLearn
                            }
                        @endphp

                        @if ($buttonLabel)
                            <div class="w-11/12 lg:w-4/5 flex items-center justify-center py-4">
                                @if ($buttonLink === 'startButton')
                                    <a href="javascript:void(0)" id="startButton"
                                        class="text-white text-lg xl:text-xl font-medium flex items-center justify-center w-full py-2 bg-blue31 rounded">
                                        {{ $buttonLabel }}
                                    </a>
                                    @include('includes.components.elearning.course.dialog.start')
                                @else
                                    <a href="{{ $buttonLink }}"
                                        class="text-white text-lg xl:text-xl font-medium flex items-center justify-center w-full py-2 bg-gray-600 rounded hover:bg-gray-700 transition">
                                        {{ $buttonLabel }}
                                    </a>
                                @endif
                            </div>
                        @endif
                        <div id="modul-scoope" class="w-11/12 lg:w-4/5 flex flex-col items-start justify-start gap-3">
                            <h3 class="font-medium text-lg">Cakupan Pembelajaran</h3>
                            <div class="flex flex-col items-start justify-start gap-4 lg:gap-2">
                                <div id="scoope1" class="flex gap-2">
                                    <svg width="25" height="25" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.125 20H20C22.357 20 23.5355 20 24.2678 19.2678C25 18.5355 25 17.357 25 15V8.75C25 6.39298 25 5.21447 24.2678 4.48223C23.5355 3.75 22.357 3.75 20 3.75H10C7.64298 3.75 6.46447 3.75 5.73223 4.48223C5 5.21447 5 6.39298 5 8.75V23.125C5 21.3991 6.39911 20 8.125 20ZM20.1642 11.4142C20.9453 10.6332 20.9453 9.36684 20.1642 8.58579C19.3832 7.80474 18.1168 7.80474 17.3358 8.58579L13.75 12.1716L12.6642 11.0858C11.8832 10.3047 10.6168 10.3047 9.83579 11.0858C9.05474 11.8668 9.05474 13.1332 9.83579 13.9142L11.6287 15.7071C12.8002 16.8787 14.6997 16.8787 15.8713 15.7071L20.1642 11.4142Z" fill="#31587C"/>
                                        <path d="M20.1642 8.58579L19.4571 9.29289L19.4571 9.29289L20.1642 8.58579ZM20.1642 11.4142L19.4571 10.7071V10.7071L20.1642 11.4142ZM17.3358 8.58579L16.6287 7.87868L17.3358 8.58579ZM13.75 12.1716L13.0429 12.8787L13.75 13.5858L14.4571 12.8787L13.75 12.1716ZM12.6642 11.0858L11.9571 11.7929L12.6642 11.0858ZM9.83579 13.9142L10.5429 13.2071H10.5429L9.83579 13.9142ZM11.6287 15.7071L12.3358 15L11.6287 15.7071ZM15.8713 15.7071L16.5784 16.4142V16.4142L15.8713 15.7071ZM20 19H8.125V21H20V19ZM23.5607 18.5607C23.4113 18.71 23.1798 18.8408 22.6099 18.9174C22.0113 18.9979 21.2068 19 20 19V21C21.1502 21 22.1135 21.0021 22.8764 20.8996C23.6681 20.7931 24.392 20.5578 24.9749 19.9749L23.5607 18.5607ZM24 15C24 16.2068 23.9979 17.0113 23.9174 17.6099C23.8408 18.1798 23.71 18.4113 23.5607 18.5607L24.9749 19.9749C25.5578 19.392 25.7931 18.6681 25.8996 17.8764C26.0021 17.1135 26 16.1502 26 15H24ZM24 8.75V15H26V8.75H24ZM23.5607 5.18934C23.71 5.33869 23.8408 5.57017 23.9174 6.14007C23.9979 6.73873 24 7.54322 24 8.75H26C26 7.59976 26.0021 6.63648 25.8996 5.87357C25.7931 5.0819 25.5578 4.35801 24.9749 3.77513L23.5607 5.18934ZM20 4.75C21.2068 4.75 22.0113 4.75212 22.6099 4.83261C23.1798 4.90923 23.4113 5.03999 23.5607 5.18934L24.9749 3.77513C24.392 3.19224 23.6681 2.95688 22.8764 2.85045C22.1135 2.74788 21.1502 2.75 20 2.75V4.75ZM10 4.75H20V2.75H10V4.75ZM6.43934 5.18934C6.58869 5.03999 6.82017 4.90923 7.39007 4.83261C7.98873 4.75212 8.79322 4.75 10 4.75V2.75C8.84976 2.75 7.88648 2.74788 7.12357 2.85045C6.3319 2.95688 5.60801 3.19224 5.02513 3.77513L6.43934 5.18934ZM6 8.75C6 7.54322 6.00212 6.73873 6.08261 6.14007C6.15923 5.57017 6.28999 5.33869 6.43934 5.18934L5.02513 3.77513C4.44224 4.35801 4.20688 5.0819 4.10045 5.87357C3.99788 6.63648 4 7.59976 4 8.75H6ZM6 23.125V8.75H4V23.125H6ZM8.125 19C5.84683 19 4 20.8468 4 23.125H6C6 21.9514 6.9514 21 8.125 21V19ZM19.4571 9.29289C19.8476 9.68342 19.8476 10.3166 19.4571 10.7071L20.8713 12.1213C22.0429 10.9497 22.0429 9.05025 20.8713 7.87868L19.4571 9.29289ZM18.0429 9.29289C18.4334 8.90237 19.0666 8.90237 19.4571 9.29289L20.8713 7.87868C19.6997 6.70711 17.8003 6.70711 16.6287 7.87868L18.0429 9.29289ZM14.4571 12.8787L18.0429 9.29289L16.6287 7.87868L13.0429 11.4645L14.4571 12.8787ZM11.9571 11.7929L13.0429 12.8787L14.4571 11.4645L13.3713 10.3787L11.9571 11.7929ZM10.5429 11.7929C10.9334 11.4024 11.5666 11.4024 11.9571 11.7929L13.3713 10.3787C12.1997 9.20711 10.3003 9.20711 9.12868 10.3787L10.5429 11.7929ZM10.5429 13.2071C10.1524 12.8166 10.1524 12.1834 10.5429 11.7929L9.12868 10.3787C7.95711 11.5503 7.95711 13.4497 9.12868 14.6213L10.5429 13.2071ZM12.3358 15L10.5429 13.2071L9.12868 14.6213L10.9216 16.4142L12.3358 15ZM15.1642 15C14.3832 15.781 13.1168 15.781 12.3358 15L10.9216 16.4142C12.4837 17.9763 15.0163 17.9763 16.5784 16.4142L15.1642 15ZM19.4571 10.7071L15.1642 15L16.5784 16.4142L20.8713 12.1213L19.4571 10.7071ZM13.75 25.25H8.125V27.25H13.75V25.25ZM4 23.125C4 25.4032 5.84683 27.25 8.125 27.25V25.25C6.95139 25.25 6 24.2986 6 23.125H4Z" fill="#31587C"/>
                                        <path d="M25 26.25H12.5" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    <p>{{ $module->mainSubject_num }} Materi Utama/Sub-Modul</p>                          
                                </div>
                                <div id="scoope2" class="flex gap-2">
                                    <svg width="25" height="25" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.37868 3.37868C2.5 4.25736 2.5 5.67157 2.5 8.5V21.5C2.5 24.3284 2.5 25.7426 3.37868 26.6213C4.25736 27.5 5.67157 27.5 8.5 27.5H21.5C24.3284 27.5 25.7426 27.5 26.6213 26.6213C27.5 25.7426 27.5 24.3284 27.5 21.5V8.5C27.5 5.67157 27.5 4.25736 26.6213 3.37868C25.7426 2.5 24.3284 2.5 21.5 2.5H8.5C5.67157 2.5 4.25736 2.5 3.37868 3.37868ZM22.0821 11.8047C22.3884 11.3452 22.2642 10.7243 21.8047 10.4179C21.3452 10.1116 20.7243 10.2358 20.4179 10.6953L16.3738 16.7615L15.4151 14.844C14.7283 13.4705 12.8139 13.3513 11.9621 14.6291L7.91795 20.6953C7.6116 21.1548 7.73577 21.7757 8.1953 22.0821C8.65483 22.3884 9.2757 22.2642 9.58205 21.8047L13.6262 15.7385L14.5849 17.656C15.2717 19.0295 17.1861 19.1487 18.0379 17.8709L22.0821 11.8047Z" fill="#31587C"/>
                                    </svg>
                                    <p>Tingkatan {{ $module->level_text }}</p>                          
                                </div>
                                <div id="scoope3" class="flex gap-2">
                                    <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.6666 13L8.33325 16.3333L11.6666 19.6667" stroke="#31587C" stroke-width="2"/>
                                        <path d="M15.0517 7.58341C15.5637 8.47019 15.8333 9.47612 15.8333 10.5001C15.8333 11.524 15.5637 12.53 15.0517 13.4167C14.5398 14.3035 13.8034 15.0399 12.9166 15.5519C12.0298 16.0639 11.0239 16.3334 9.99992 16.3334" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M8.33341 8L11.6667 4.66667L8.33341 1.33333" stroke="#31587C" stroke-width="2"/>
                                        <path d="M4.94827 13.4166C4.43628 12.5298 4.16675 11.5239 4.16675 10.4999C4.16675 9.47595 4.43628 8.47003 4.94827 7.58325C5.46025 6.69647 6.19664 5.96009 7.08341 5.4481C7.97019 4.93612 8.97612 4.66659 10.0001 4.66659" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                    </svg>                                        
                                    <p>Akses {{ $module->type_text }}</p>                          
                                </div>
                                <div id="scoope4" class="flex gap-2">
                                    <svg width="25" height="25" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.25 2.5V9.25L15.25 9.30441V9.30442V9.30443V9.30444C15.2499 9.7285 15.2498 10.1406 15.2955 10.4805C15.347 10.8637 15.4726 11.301 15.8358 11.6642C16.199 12.0274 16.6363 12.153 17.0195 12.2045C17.3594 12.2502 17.7715 12.2501 18.1956 12.25H18.1956H18.1956H18.1956L18.25 12.25H25V20C25 23.5355 25 25.3033 23.9017 26.4017C22.8033 27.5 21.0355 27.5 17.5 27.5H12.5C8.96447 27.5 7.1967 27.5 6.09835 26.4017C5 25.3033 5 23.5355 5 20V10C5 6.46447 5 4.6967 6.09835 3.59835C7.1967 2.5 8.96447 2.5 12.5 2.5H15.25ZM17.25 2.50167V9.25C17.25 9.74967 17.2521 10.0238 17.2777 10.214L17.2787 10.2213L17.286 10.2223C17.4762 10.2479 17.7503 10.25 18.25 10.25H24.9983C24.9919 9.59064 24.9608 9.1935 24.8097 8.82883C24.6194 8.3694 24.2581 8.00811 23.5355 7.28555L23.5355 7.28554L20.2145 3.96447C19.4919 3.24189 19.1306 2.8806 18.6712 2.6903C18.3065 2.53925 17.9094 2.50809 17.25 2.50167ZM10.25 16.25C10.25 15.6977 10.6977 15.25 11.25 15.25L18.75 15.25C19.3023 15.25 19.75 15.6977 19.75 16.25C19.75 16.8023 19.3023 17.25 18.75 17.25L11.25 17.25C10.6977 17.25 10.25 16.8023 10.25 16.25ZM11.25 20.25C10.6977 20.25 10.25 20.6977 10.25 21.25C10.25 21.8023 10.6977 22.25 11.25 22.25H16.25C16.8023 22.25 17.25 21.8023 17.25 21.25C17.25 20.6977 16.8023 20.25 16.25 20.25H11.25Z" fill="#31587C"/>
                                    </svg>                                        
                                    <p>{{ $module->certificate_text }}</p>                          
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full py-7 content-shadows flex flex-col items-center justify-center gap-2">
                        <h3 class="w-11/12 lg:w-4/5 font-medium text-lg pb-4">Dikembangkan Oleh</h3>
                        <div class="h-fit w-11/12 lg:w-4/5 flex justify-start items-start flex-col gap-4">
                            <div class="flex items-center justify-start gap-4">
                                <img id="publisher-logo" src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-10 w-10">
                                <div class="font-medium">
                                    <h3 id="publisher-name" class="text-lg lg:text-base">{{ $module->module_publisher_name }}</h3>
                                    <h5 id="published-date" class="text-base lg:text-sm opacity-50">{{ $module->module_publish_date_formatted }}</h5>
                                </div>
                            </div>
                            <div class="flex items-center justify-start gap-4">
                                <p id="modul-rating" class="font-medium text-lg">{{ $module->module_rating}}</p>
                                <div id="rating-container" class="flex gap-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-fit content-shadows flex flex-col items-center justify-start relative">
                        <div class="w-11/12 lg:w-4/5 h-52 lg:h-72 absolute z-20 flex flex-col justify-center text-justify text-white">
                            <h3 class="w-full font-medium text-lg pb-2 xl:pb-4">Memiliki Pertanyaan?</h3>
                            <p class="">Jika Anda memiliki pertanyaan seputar pembelajaran ini, silahkan menghubungi kami melalui fitur chat yang tersedia atau kontak berikut ini.</p>
                            <div class="w-full mt-6 lg:mt-2 xl:mt-4 lg:flex-col flex">
                                <div class="w-full flex items-center justify-start gap-2">
                                    <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg" class="lg:hidden xl:block xl:w-10">
                                        <path d="M6.67962 5.87467L8.87184 3.68245C9.26236 3.29192 9.89553 3.29192 10.2861 3.68245L14.135 7.53139C14.5255 7.92192 14.5255 8.55508 14.135 8.94561L11.5533 11.5273C11.16 11.9206 11.0625 12.5214 11.3112 13.0188C12.7491 15.8945 15.0808 18.2263 17.9565 19.6641C18.4539 19.9128 19.0547 19.8153 19.448 19.4221L22.0297 16.8403C22.4203 16.4498 23.0534 16.4498 23.4439 16.8403L27.2929 20.6893C27.6834 21.0798 27.6834 21.713 27.2929 22.1035L25.1007 24.2957C22.9893 26.4071 19.6468 26.6446 17.258 24.8531L13.5233 22.052C11.7798 20.7444 10.231 19.1956 8.92331 17.452L6.12226 13.7173C4.33072 11.3286 4.56827 7.98602 6.67962 5.87467Z" fill="white"/>
                                    </svg>
                                    <p>(+62)81 1234 5678 902</p>
                                </div>
                                <div class="w-full flex items-center justify-start gap-2">
                                    <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg" class="lg:hidden xl:block xl:w-10">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M26.25 14.7253V22.4753C26.25 25.3038 26.25 26.718 25.3713 27.5967C24.4926 28.4753 23.0784 28.4753 20.25 28.4753H9.75C6.92157 28.4753 5.50736 28.4753 4.62868 27.5967C3.75 26.718 3.75 25.3038 3.75 22.4753V14.7253C3.75 16.3691 3.75 17.191 4.20398 17.7441C4.28709 17.8454 4.37995 17.9383 4.48121 18.0214C5.03439 18.4753 5.85626 18.4753 7.5 18.4753H8.55848C9.2542 18.4753 9.60206 18.4753 9.86395 18.6641C10.1258 18.8529 10.2358 19.1829 10.4558 19.8429L10.7942 20.8578C11.0142 21.5178 11.1242 21.8478 11.386 22.0366C11.6479 22.2253 11.9958 22.2253 12.6915 22.2253H17.3085C18.0042 22.2253 18.3521 22.2253 18.614 22.0366C18.8758 21.8478 18.9858 21.5178 19.2058 20.8578L19.5442 19.8429C19.7642 19.1829 19.8742 18.8529 20.136 18.6641C20.3979 18.4753 20.7458 18.4753 21.4415 18.4753H22.5C24.1437 18.4753 24.9656 18.4753 25.5188 18.0214C25.6201 17.9383 25.7129 17.8454 25.796 17.7441C26.25 17.191 26.25 16.3691 26.25 14.7253Z" fill="white"/>
                                        <path d="M20 8.47534H22.25C24.1356 8.47534 25.0784 8.47534 25.6642 9.06113C26.25 9.64691 26.25 10.5897 26.25 12.4753V24.4753C26.25 26.361 26.25 27.3038 25.6642 27.8896C25.0784 28.4753 24.1356 28.4753 22.25 28.4753H7.75C5.86438 28.4753 4.92157 28.4753 4.33579 27.8896C3.75 27.3038 3.75 26.361 3.75 24.4753V12.4753C3.75 10.5897 3.75 9.64691 4.33579 9.06113C4.92157 8.47534 5.86438 8.47534 7.75 8.47534H10" stroke="white" stroke-width="2"/>
                                        <path d="M10 13.4753L15 17.2253M15 17.2253L20 13.4753M15 17.2253L15 4.72534" stroke="white" stroke-width="2"/>
                                    </svg>                                    
                                    <p>mikaunivairlangga@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-52 lg:h-72 absoulute z-0">
                            <div class="w-full h-full absolute z-0 bg-blue31 bg-opacity-90 rounded"></div>
                            <img src="{{ asset('images/bg5.jpg') }}" alt="" class="w-full h-full object-cover rounded">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @include('includes.components.elearning.footer')
    
    </body>


    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });


//Left-Content
    function showContent(id, button) {
        // Sembunyikan semua kategori dengan efek transisi
        document.querySelectorAll('#modul-display > div').forEach(div => {
            div.classList.add('opacity-0'); // Opacity 0 dulu untuk efek fade-out
            setTimeout(() => {
                div.classList.add('hidden');
            }, 300); // Delay agar transisi smooth
        });
        setTimeout(() => {
            if (id === 'all') {
                document.querySelectorAll('#modul-display > div').forEach(div => {
                    div.classList.remove('hidden');
                    setTimeout(() => {
                        div.classList.remove('opacity-0'); // Fade-in
                    }, 50);
                });
            } else {
                let selectedDiv = document.getElementById(id);
                selectedDiv.classList.remove('hidden');
                setTimeout(() => {
                    selectedDiv.classList.remove('opacity-0');
                }, 50);
            }
        }, 300);
        // Hapus border dari semua tombol
        document.querySelectorAll('#modul-category button').forEach(btn => {
            btn.classList.remove('border-b-4', 'border-blue31');
        });
        // Tambahkan border ke tombol yang diklik
        button.classList.add('border-b-4', 'border-blue31');
    }
    // Pastikan tampilan default saat halaman dimuat
    document.addEventListener("DOMContentLoaded", function() {
        let defaultButton = document.getElementById('all-modul-category-btn');
        showContent('all', defaultButton);
    });



    function toggleSubmodul(submodulId, button) {
    const submodul = document.getElementById(submodulId);
    const svgIcon = button.querySelector("svg");

    if (submodul.classList.contains("hidden")) {
        submodul.classList.remove("hidden");
        submodul.style.opacity = "0";
        submodul.style.transform = "translateY(-10px)";
        submodul.style.transition = "opacity 0.3s ease-out, transform 0.3s ease-out";
        
        requestAnimationFrame(() => {
            submodul.style.opacity = "1";
            submodul.style.transform = "translateY(0)";
        });

        svgIcon.style.transform = "rotate(180deg)";
    } else {
        submodul.style.opacity = "0";
        submodul.style.transform = "translateY(-10px)";

        setTimeout(() => {
            submodul.classList.add("hidden");
        }, 300);

        svgIcon.style.transform = "rotate(0deg)";
    }
}



    //Right-Content
    document.addEventListener("DOMContentLoaded", function () {
        const video = document.getElementById("modul-teaser");
        const playBtn = document.getElementById("playBtn");
        const pauseBtn = document.getElementById("PauseBtn");

        video.volume = 0.1; // Pastikan suara menyala
        // Pastikan tombol tampil sesuai status video saat halaman pertama kali dimuat
        updateButtonState(!video.paused);
        // Loop video otomatis setiap 15 detik
        video.addEventListener("loadedmetadata", () => {
            setInterval(() => {
                if (video.currentTime >= 15) {
                    video.currentTime = 0;
                    video.play();
                    updateButtonState(true);
                }
            }, 1000);
        });
        // Klik video untuk Play/Pause
        video.addEventListener("click", togglePlayPause);
        // Pastikan tombol selalu update saat video dipause atau diputar
        video.addEventListener("play", () => updateButtonState(true));
        video.addEventListener("pause", () => updateButtonState(false));
        // Fungsi untuk Play/Pause
        function togglePlayPause() {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }
        // Update tampilan tombol Play/Pause
        function updateButtonState(isPlaying) {
            if (isPlaying) {
                playBtn.classList.add("hidden");
                pauseBtn.classList.remove("hidden");
            } else {
                playBtn.classList.remove("hidden");
                pauseBtn.classList.add("hidden");
            }
        }
    });



    //Rating
    document.addEventListener("DOMContentLoaded", function () {
        const ratingElement = document.getElementById("modul-rating");
        const starsContainer = document.getElementById("rating-container");

        const rating = parseFloat(ratingElement.textContent); // Ambil angka rating
        const fullStars = Math.floor(rating); // Bintang penuh
        const fraction = rating % 1; // Persentase isi bintang terakhir
        const emptyStars = 5 - Math.ceil(rating); // Bintang kosong

        const fullStarSVG = `<svg width="20" height="19" viewBox="0 0 20 19" fill="#F4C867" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.6 1c0.2-0.3 0.6-0.3 0.8 0l3.1 4.3c0.1 0.1 0.2 0.2 0.4 0.2l5.1 1.7c0.3 0.1 0.4 0.5 0.2 0.7l-3.1 4.3c-0.1 0.1-0.2 0.3-0.2 0.4v5.3c0 0.3-0.3 0.5-0.6 0.4l-5.1-1.6c-0.1 0-0.3 0-0.4 0l-5.1 1.6c-0.3 0.1-0.6-0.1-0.6-0.4v-5.3c0-0.2-0.1-0.3-0.2-0.4l-3.1-4.3c-0.2-0.3 0-0.6 0.3-0.7l5.1-1.7c0.2-0.1 0.3-0.1 0.4-0.2l3.1-4.3z"/>
        </svg>`;
        const emptyStarSVG = `<svg width="20" height="19" viewBox="0 0 20 19" fill="#E5E5E5" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.6 1c0.2-0.3 0.6-0.3 0.8 0l3.1 4.3c0.1 0.1 0.2 0.2 0.4 0.2l5.1 1.7c0.3 0.1 0.4 0.5 0.2 0.7l-3.1 4.3c-0.1 0.1-0.2 0.3-0.2 0.4v5.3c0 0.3-0.3 0.5-0.6 0.4l-5.1-1.6c-0.1 0-0.3 0-0.4 0l-5.1 1.6c-0.3 0.1-0.6-0.1-0.6-0.4v-5.3c0-0.2-0.1-0.3-0.2-0.4l-3.1-4.3c-0.2-0.3 0-0.6 0.3-0.7l5.1-1.7c0.2-0.1 0.3-0.1 0.4-0.2l3.1-4.3z"/>
        </svg>`;
        function generatePartialStar(percentage) {
            return `<svg width="20" height="19" viewBox="0 0 20 19" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="grad">
                        <stop offset="${percentage}%" stop-color="#F4C867"/>
                        <stop offset="${percentage}%" stop-color="#E5E5E5"/>
                    </linearGradient>
                </defs>
                <path fill="url(#grad)" d="M9.6 1c0.2-0.3 0.6-0.3 0.8 0l3.1 4.3c0.1 0.1 0.2 0.2 0.4 0.2l5.1 1.7c0.3 0.1 0.4 0.5 0.2 0.7l-3.1 4.3c-0.1 0.1-0.2 0.3-0.2 0.4v5.3c0 0.3-0.3 0.5-0.6 0.4l-5.1-1.6c-0.1 0-0.3 0-0.4 0l-5.1 1.6c-0.3 0.1-0.6-0.1-0.6-0.4v-5.3c0-0.2-0.1-0.3-0.2-0.4l-3.1-4.3c-0.2-0.3 0-0.6 0.3-0.7l5.1-1.7c0.2-0.1 0.3-0.1 0.4-0.2l3.1-4.3z"/>
            </svg>`;
        }

        // Hapus semua elemen dalam container sebelum menggambar ulang
        starsContainer.innerHTML = "";
        // Tambahkan bintang penuh
        for (let i = 0; i < fullStars; i++) {
            starsContainer.innerHTML += fullStarSVG;
        }
        // Jika ada sisa pecahan, tambahkan bintang dengan persentase sesuai
        if (fraction > 0) {
            const percentage = Math.round(fraction * 100); // Konversi ke persentase
            starsContainer.innerHTML += generatePartialStar(percentage);
        }
        // Tambahkan bintang kosong
        for (let i = 0; i < emptyStars; i++) {
            starsContainer.innerHTML += emptyStarSVG;
        }
        });

    </script>

</html>
