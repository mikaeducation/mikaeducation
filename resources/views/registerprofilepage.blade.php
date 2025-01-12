<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register | Mika Education</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('public/assets/css/style.css')
</head>
<body>
    <section class="w-full h-max">
        <div class="w-full h-full bg-bluee3">
            <div class="w-full h-36 bg-white head-shadow flex items-center justify-center">
                <div class="flex items-center justify-center text-blue31 gap-5">
                    <div class="w-auto h-24 flex-grow items-center justify-center">
                        <div class="flex items-center justify-center">
                            <div class="h-10 w-10 bg-blue6a rounded-full flex items-center justify-center"><h1 class="font-bold text-2xl text-white text-center">1</h1></div>
                        </div>
                        <h1 class="flex items-center justify-center text-center whitespace-pre-line">Daftarkan
                            Akun</h1>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 72 24" stroke-width="2" stroke="currentColor" class="w-24 h-6 text-blue6a">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 12h72m0 0l-6-6m6 6l-6 6" />
                    </svg>
                    <div class="w-auto h-24 flex-grow items-center justify-center">
                        <div class="flex items-center justify-center">
                            <div class="h-10 w-10 border-blue6a border-2 rounded-full flex items-center justify-center"><h1 class="font-bold text-2xl text-blue6a text-center">2</h1></div>
                        </div>
                        <h1 class="flex items-center justify-center text-center whitespace-pre-line">Lengkapi
                            Biodata</h1>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 72 24" stroke-width="2" stroke="currentColor" class="w-24 h-6 text-blue6a">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 12h72m0 0l-6-6m6 6l-6 6" />
                    </svg>
                    <div class="w-auto h-24 flex-grow items-center justify-center">
                        <div class="flex items-center justify-center">
                            <div class="h-10 w-10 border-2 border-blue6a border-dashed rounded-full flex items-center justify-center"><h1 class="font-bold text-2xl text-blue6a text-center">3</h1></div>
                        </div>
                        <h1 class="flex items-center justify-center text-center whitespace-pre-line">Selesai</h1>
                    </div>
                </div>
            </div>
            <div class="w-full h-max bg-bluee3 flex items-center justify-center mt-12 font-medium text-blue31">
                <div class="flex-col items-center justify-center w-1/2 h-5/6">
                    <p class="text-center font-normal whitespace-pre-line leading-8"><span class="font-bold text-3xl">Lengkapi Biodata Anda</span>
                            Anda harus melengkapi informasi mengenai biodata Anda terlebih dahulu. 
                    </p>
                    <div class="w-full mt-10 mb-14 flex-col items-center text-center">
                        <form action="{{ route('complete-profile') }}" method="POST" class="space-y-5 flex-col">
                            @csrf
                            <div class="flex w-full text-start gap-6">
                                <div class="w-1/2 space-y-1">
                                    <label>Nama Depan</label>
                                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="p-2 w-full border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue3a">
                                    @error('first_name')
                                        <p class="text-blue6a text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-1/2 space-y-1">
                                    <label>Nama Belakang</label>
                                    <input type="text" name="last_name" value="{{ old('last_name') }}" class="p-2 w-full border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue3a">
                                    @error('last_name')
                                        <p class="text-blue6a text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-start space-y-1">
                                <label for="">Tempat dan Tanggal Lahir</label>
                                <div class="flex space-x-6">
                                    <input type="text" name="birth_place" value="{{ old('birth_place') }}" class="w-2/3 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue3a"/>
                                    @error('birth_place')
                                        <p class="text-blue6a text-sm">{{ $message }}</p>
                                    @enderror
                                    <input type="date" name="birth_date" value="{{ old('birth_date') }}" class="w-2/4 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue3a"/>
                                    @error('birth_date')
                                        <p class="text-blue6a text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-start space-y-1">
                                <label for="">Alamat</label>
                                <input type="text" name="address" value="{{ old('address') }}" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue3a"/>
                                @error('address')
                                    <p class="text-blue6a text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="text-start space-y-1">
                                <label for="">Pekerjaan</label>
                                <input type="text" name="occupation" value="{{ old('occupation') }}" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue3a"/>
                                @error('occupation')
                                    <p class="text-blue6a text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="text-start space-y-1 pb-5">
                                <label for="">Asal Instansi</label>
                                <input type="text" name="institution" value="{{ old('institution') }}" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue3a"/>
                                @error('institution')
                                    <p class="text-blue6a text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <button class="bg-blue6a w-1/2 p-3 rounded font-bold text-white">SIMPAN DAN LANJUTKAN</button>
                            <p class="font-normal">Jika memerlukan bantuan, <a href="" class="underline font-medium">hubungi tim dukungan kami.</a></p>
                        </form>
                        
                    </div>                    
                </div>
            </div>
        </div>
    </section>    
</body>
</html>

@if(session('success'))
<script>
    alert("{{ session('success') }}");
</script>
@endif
