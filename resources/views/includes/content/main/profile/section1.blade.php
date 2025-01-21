<form id="biodataForm" action="{{ route('profile-update') }}" method="POST" class="w-full flex flex-col gap-4" enctype="multipart/form-data">    
    @csrf    
    @method('PUT')    
    <div class="w-full flex gap-4 pb-8 border-b-2 border-bluee3">    
        <div class="w-full flex">    
            <div class="flex-col w-full text-start space-y-4 font-medium">    
                <div class="space-y-1">    
                    <label for="first_name">Nama Depan</label>    
                    <input type="text" name="first_name" value="{{ old('first_name', $profile->first_name) }}" class="p-2 w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31" required>    
                </div>    
                <div class="space-y-1">    
                    <label for="birth_place">Tempat dan Tanggal Lahir</label>    
                    <input type="text" name="birth_place" value="{{ old('birth_place', $profile->birth_place) }}" class="p-2 w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31" required>    
                </div>    
                <div class="space-y-1 flex-col w-full">    
                    <label for="address">Alamat Lengkap</label> <span class="italic font-light">Sesuai alamat di KTP</span>  
                    <input type="text" name="address" value="{{ old('address', $profile->address) }}" class="p-2 w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31" required>    
                </div>  
            </div>    
        </div>    
        <div class="w-full flex">    
            <div class="flex-col w-full text-start space-y-4 font-medium">    
                <div class="space-y-1">    
                    <label for="last_name">Nama Belakang</label>  
                    <input type="text" name="last_name" value="{{ old('last_name', $profile->last_name) }}" class="p-2 w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31" required>    
                </div>    
                <div class="space-y-1">    
                    <label for="birth_date" class="text-transparent">Tanggal Lahir</label>    
                    <input type="date" name="birth_date" value="{{ old('birth_date', $profile->birth_date) }}" class="w-full p-1.5 border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31" required/>    
                </div>    
                <div class="space-y-1">    
                    <label for="gender" class="">Jenis Kelamin</label>    
                    <select name="gender" id="gender" class="form-select p-2 block w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31">    
                        <option value="{{ old('gender', $profile->gender) }}">{{ old('gender', $profile->gender) ?? 'Pilih jenis kelamin Anda...' }}</option>    
                        <option value="Laki-laki">Laki-laki</option>    
                        <option value="Perempuan">Perempuan</option>    
                    </select>    
                </div>  
            </div>    
        </div>    
    </div>    
    <div class="w-full flex-col mt-4 pb-8 border-b-2 border-bluee3">
        <div class="w-full flex gap-4">
            <div class="w-full flex">
                <div class="flex-col w-full text-start space-y-4 font-medium">
                    <div class="text-start space-y-1">  
                        <label for="occupation">Pekerjaan</label> <span class="italic font-light">Aktif/Saat ini</span>  
                        <input type="text" name="occupation" id="occupation" value="{{ old('occupation', $profile->occupation) }}" class="w-full p-2 border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31">    
                    </div> 
                    <div class="space-y-1">
                        <label>Keahlian Khusus</label>
                        <input type="text" name="skill" value="{{ old('skill', $profile->skill) }}" class="p-2 w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31">
                    </div>
                </div>
            </div>
            <div class="w-full flex">
                <div class="flex-col w-full text-start space-y-4 font-medium">
                    <div class="space-y-1">
                        <label for="institution">Asal Instansi</label> <span class="italic font-light">Aktif/Saat ini</span>
                        <input type="text" name="institution" value="{{ old('institution', $profile->institution) }}" class="w-full p-2 border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31" required/>
                    </div>
                    <div class="space-y-1">    
                        <label for="experience" class="block text-gray-700 font-medium">Durasi Pengalaman <span class="italic font-light">Hingga saat ini</span> </label>
                        <select id="experience" name="experience" class="p-2 block w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31">
                            <option value="{{ old('experience', $profile->experience) }}">{{ old('experience', $profile->experience) ?? 'Pilih Durasi Pengalaman Anda...' }}</option>
                            <option value="0">Belum Memiliki Pengalaman</option>
                            <option value="1-2">1 - 2 Tahun</option>
                            <option value="3-5">3 - 5 Tahun</option>
                            <option value="6-10">6 - 10 Tahun</option>
                            <option value="11-15">11 - 15 Tahun</option>
                            <option value="16-20">16 - 20 Tahun</option>
                            <option value="20+">Lebih dari 20 Tahun</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="font-normal text-center">Anda dapat memperbaharui biodata diri melalui tombol edit dibawah ini. Jika memerlukan bantuan, <a href="" class="underline font-medium">hubungi tim dukungan kami.</a></p>
    <div class="w-full mt-4 flex items-center justify-end font-medium">
        <button type="button" id="editButtonBio" class="bg-blue31 py-2 px-10 rounded text-white">Edit atau Perbarui Biodata Diri</button>    
        <button type="submit" id="saveButtonBio" class="hidden bg-transparent py-2 px-10 rounded text-blue31 border-2 border-blue31 hover:bg-blue31 hover:text-white transition">Simpan Perubahan</button>    
    </div>
</form>

<script>
    // JS untuk form input pekerjaan  
    document.getElementById('occupation').addEventListener('change', function() {  
            var otherOccupationInput = document.getElementById('other-occupation');  
            if (this.value === 'Lainnya') {  
                otherOccupationInput.classList.remove('hidden');  
            } else {  
                otherOccupationInput.classList.add('hidden');  
            }  
        });
        
        // JS untuk form biodata diri  
        document.addEventListener('DOMContentLoaded', function () {  
            const editButton = document.getElementById('editButtonBio');  
            const saveButton = document.getElementById('saveButtonBio');  
            const inputs = document.querySelectorAll('#biodataForm input, #biodataForm select');  
            // Disable all inputs by default  
            inputs.forEach(input => input.setAttribute('disabled', 'true'));  
            // Event listener for the "Edit and Update" button  
            editButton.addEventListener('click', function () {  
                // Enable all inputs  
                inputs.forEach(input => input.removeAttribute('disabled'));  
                // Hide the "Edit and Update" button  
                editButton.classList.add('hidden');  
                // Show the "Save" button  
                saveButton.classList.remove('hidden');  
            });  
        });
</script>