<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Hash;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Pengguna Baru')
                ->icon('heroicon-o-plus')
                ->modalHeading('Buat Akun Pengguna Baru')
                ->modalWidth('md')

                ->createAnother(false)
                ->modalSubmitActionLabel('Simpan')
                ->modalCancelActionLabel('Batal')

                ->form([
                    TextInput::make('phone')
                        ->label('Nomor Telepon')
                        ->required()
                        ->unique(table: 'users', column: 'phone')
                        ->numeric(),

                    TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->required()
                        ->unique(table: 'users', column: 'email'),

                    TextInput::make('password')
                        ->label('Password')
                        ->password()
                        ->revealable()
                        ->required()
                        ->dehydrateStateUsing(fn ($state) => Hash::make($state)), // ENKRIPSI PASSWORD
                ])
                ->after(function ($record) {
                    // Cek jika profile belum ada
                    if (!$record->profile) {
                        \App\Models\Profile::create([
                            'phone' => $record->phone, // Foreign Key
                            'first_name' => 'Pengguna',
                            'last_name' => 'Baru',                            
                            'institution' => '-', 
                            'occupation' => '-',
                            'address' => '-',
                            'birth_place' => '-',
                            'birth_date' => now(),      
                        ]);
                    }

                    $record->update(['is_profile_completed' => false]);

                    try {
                        $record->sendEmailVerificationNotification();
                        
                        \Filament\Notifications\Notification::make()
                            ->title('Sukses')
                            ->body('User dibuat & Email verifikasi dikirim.')
                            ->success()
                            ->send();
                    } catch (\Exception $e) {
                        \Filament\Notifications\Notification::make()
                            ->title('User Dibuat, Tapi Email Gagal Dikirim')
                            ->body('Pastikan konfigurasi MAIL di .env sudah benar. Error: ' . $e->getMessage())
                            ->warning()
                            ->send();
                    }
                }),
        ];
    }
}
