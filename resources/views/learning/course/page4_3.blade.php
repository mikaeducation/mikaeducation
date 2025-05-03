<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite('public/assets/css/style.css')
        {{-- <script>document.documentElement.classList.add('js')</script> --}}
    </head>
    <body class="font-futura w-full min-h-screen flex flex-col relative">
        @include('includes.components.elearning.course.header')
    
        <section class="w-full flex-1 flex flex-col items-center justify-center text-blue31">
            <div class="w-full flex-grow flex items-start justify-start">
                {{-- Left Content --}}
                <div id="left" class="w-3/4 flex-1 max-h-[100vh] lg:max-h-[84vh] flex flex-col overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-blue31 scrollbar-track-gray-100">
                    <div class="w-full h-full flex flex-col pl-12 md:pr-12 mt-8">
                        <div class="w-full pb-12 text-lg flex flex-col text-justify">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis et nunc id maximus. Quisque a nunc vel odio laoreet fringilla nec sit amet orci. Phasellus tincidunt, elit nec ullamcorper tempor, erat turpis commodo nunc, et condimentum ipsum neque sed justo. Etiam porttitor, mauris non viverra dapibus, lacus ante porta nibh, non euismod odio dolor et ex. Duis aliquet nec urna quis luctus. Etiam venenatis odio tempor, ullamcorper nibh a, mattis purus. Pellentesque pharetra velit id tellus tincidunt pretium.
                                In laoreet venenatis condimentum. Donec sit amet rhoncus augue, sit amet ultricies tellus. Cras rutrum metus volutpat dolor semper interdum. Morbi feugiat risus at felis semper, et interdum ante bibendum. Donec eu ligula dui. Ut placerat tempor urna eu molestie. Vestibulum tortor urna, gravida a euismod feugiat, maximus id justo. Fusce nulla dolor, efficitur vitae dictum sed, vestibulum eu tellus. Nunc vestibulum turpis vitae hendrerit pretium. Sed maximus pulvinar rhoncus. Ut sit amet tempor elit. Interdum et malesuada fames ac ante ipsum primis in faucibus.                                        
                                Donec faucibus eleifend pretium. Pellentesque eleifend commodo iaculis. Quisque gravida tellus vel quam elementum iaculis. Donec a nisi in augue blandit malesuada ac non dolor. Nunc ex arcu, volutpat in turpis sed, congue accumsan libero. Sed non consectetur lorem. Donec quis vulputate justo. Curabitur in diam pellentesque, tincidunt arcu sed, interdum tortor. Donec id lorem libero. Quisque lobortis pellentesque iaculis. Pellentesque fermentum velit nec nunc posuere, nec pulvinar mi congue. Nullam ut sollicitudin turpis. Donec tincidunt, enim vitae volutpat pulvinar, augue urna auctor nunc, id posuere urna mauris a risus. Morbi at mi sit amet metus vehicula posuere.
                                Phasellus lobortis magna nec velit porta, ut fermentum sem porttitor. Nam vehicula tortor ac nibh egestas ullamcorper. Suspendisse nec eros vitae sapien malesuada sodales ac quis nunc. Nunc vitae nisl bibendum, ultricies dolor nec, commodo tellus. Donec sem nisi, facilisis et fringilla vitae, venenatis eu lorem. Etiam tempus sem id enim rhoncus, in dapibus felis maximus. Suspendisse ut metus fringilla, condimentum mi non, sagittis turpis.                                        
                            </p>
                        </div>
                    </div>
                </div>
                {{-- Right Content --}}
                @include('includes.components.elearning.course.section')
            </div>
        </section>

    @include('includes.components.elearning.course.footer')
    
    </body>

</html>
