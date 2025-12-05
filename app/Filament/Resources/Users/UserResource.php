<?php

namespace App\Filament\Resources\Users;

use App\Filament\Resources\Users\Pages;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

// --- 1. Base Resource ---
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Storage;

// --- 2. Form Imports ---
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;

// --- 3. Table Imports ---
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\ForceDeleteAction;

// --- 4. Infolist Imports (PENTING) ---
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\Split;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Group;
use Filament\Support\Enums\Alignment;



class UserResource extends Resource
{
    protected static ?string $model = User::class;

    // Konfigurasi Navigasi (v3 style)
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Daftar Pengguna';
    protected static ?string $navigationGroup = null;
    protected static ?int $navigationSort = 1;
    protected static ?string $modelLabel = 'Pengguna';
    protected static ?string $pluralModelLabel = 'Daftar Pengguna';
    protected static ?string $recordTitleAttribute = 'phone';

    public static function getRecordTitle(?Model $record): ?string
    {
        if (!$record) return null;
        // Gabungkan nama depan dan belakang, jika kosong pakai phone
        $fullName = trim(($record->profile->first_name ?? '') . ' ' . ($record->profile->last_name ?? ''));
        return $fullName ?: $record->phone;
    }
    
    // --- FORM CONFIGURATION ---
    public static function form(Form $form): Form
    {
        return $form->schema([]);
    }

    // --- TABLE CONFIGURATION ---
    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query) => $query->withTrashed())
            ->columns([
                TextColumn::make('phone')
                    ->label('No. Telepon')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->icon('heroicon-m-envelope'),
                
                TextColumn::make('profile.first_name')
                    ->label('Nama Lengkap')
                    ->formatStateUsing(fn ($record) => 
                        trim(($record->profile->first_name ?? '') . ' ' . ($record->profile->last_name ?? ''))
                    )
                    ->searchable()
                    ->placeholder('-'),

                TextColumn::make('profile.institution')
                    ->label('Asal Institusi')
                    ->placeholder('-'),

                TextColumn::make('created_at')
                    ->dateTime('d M Y')
                    ->label('Bergabung'),
            ])

            ->recordClasses(fn (User $record) => 
                $record->trashed() ? 'trashed-row' : null
            )

            ->actions([
                EditAction::make()
                    ->iconButton()
                    ->color('warning')
                    ->modalHeading('Edit Kontak Pengguna')
                    ->modalSubmitActionLabel('Simpan')
                    ->modalCancelActionLabel('Batal')
                    ->form([
                        TextInput::make('phone')
                            ->label('Nomor Telepon')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required(),
                    ])
                    ->visible(fn (User $record) => ! $record->trashed()),

                // Tombol DELETE (Soft Delete)
                DeleteAction::make()
                    ->iconButton()
                    ->modalHeading('Nonaktifkan Akun Pengguna')
                    ->modalSubmitActionLabel('Nonaktifkan')
                    ->modalCancelActionLabel('Batal')
                    ->modalDescription('Pengguna ini tidak akan bisa login untuk sementara waktu (soft-delete), namun datanya masih tersimpan dan bisa dikembalikan.')
                    ->visible(fn (User $record) => ! $record->trashed()),

                // Tombol RESTORE (Hanya muncul jika sudah dihapus)
                RestoreAction::make()
                    ->iconButton()
                    ->color('success')
                    ->modalHeading('Aktifkan Akun Pengguna')
                    ->modalSubmitActionLabel('Aktifkan')
                    ->modalCancelActionLabel('Batal')
                    ->modalDescription('Apakah Anda yakin ingin mengaktifkan kembali pengguna ini? Data pengguna akan dikembalikan dan pengguna dapat melakukan login kembali.')
                    ->visible(fn (User $record) => $record->trashed()),

                ForceDeleteAction::make()
                    ->iconButton()
                    ->icon('heroicon-m-x-mark') 
                    ->color('danger')
                    ->modalHeading('Hapus Pengguna Secara Permanen')
                    ->modalSubmitActionLabel('Hapus Permanen')
                    ->modalCancelActionLabel('Batal')
                    ->modalDescription('PERINGATAN: Tindakan ini tidak dapat dibatalkan. Semua data pengguna ini akan dihapus selamanya.')
                    ->visible(fn (User $record) => $record->trashed()),
            ])
            ->actionsColumnLabel('Aksi')
            
            ->actionsAlignment('center')
        
            ->recordUrl(fn (User $record): string => Pages\ViewUser::getUrl([$record->id]));
    }

    // --- INFOLIST CONFIGURATION ---
    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
        ->schema([
            Grid::make(12)
                ->schema([
                    // === KOLOM KIRI (Lebar 4 dari 12) ===
                    Group::make([
                        Section::make([
                        ImageEntry::make('profile.profile_image')
                            ->hiddenLabel()
                            ->circular()
                            ->width(180)
                            ->height(180)
                            ->alignCenter()
                            ->state(function ($record) {
                                $path = $record->profile->profile_image;
                                if (empty($path)) {
                                    return null;
                                }
                                return asset($path);
                            })
                            ->defaultImageUrl(function ($record) {
                                $name = trim(($record->profile->first_name ?? 'User') . ' ' . ($record->profile->last_name ?? ''));
                                return 'https://ui-avatars.com/api/?name=' . urlencode($name) . '&background=random&color=fff&size=256';
                            }),

                            TextEntry::make('profile.first_name')
                                ->label('Nama Lengkap')
                                ->hiddenLabel()
                                ->formatStateUsing(fn ($record) => 
                                    trim(($record->profile->first_name ?? '') . ' ' . ($record->profile->last_name ?? ''))
                                )
                                ->weight('bold')
                                ->size('lg')
                                ->alignCenter(),
                        
                        Group::make([
                            TextEntry::make('profile.institution')
                                ->hiddenLabel()
                                ->icon('heroicon-m-building-office-2')
                                ->alignLeft(),
                            
                            TextEntry::make('email')
                                ->hiddenLabel()
                                ->icon('heroicon-m-envelope')
                                ->alignLeft(),

                            TextEntry::make('phone')
                                ->hiddenLabel()
                                ->icon('heroicon-m-phone')
                                ->alignLeft(),
                        ])->extraAttributes(['class' => 'text-center']),

                    ]),
                ])->columnSpan([
                    'default' => 12,
                    'md' => 4, 
                ]),

                    // === KOLOM KANAN ===
                    Section::make('Informasi Pribadi')
                        ->schema([
                                    TextEntry::make('profile.first_name')
                                        ->label('Nama Depan')
                                        ->inlineLabel(), 

                                    TextEntry::make('profile.last_name')
                                        ->label('Nama Belakang')
                                        ->inlineLabel(),

                                    TextEntry::make('profile.gender')
                                        ->label('Jenis Kelamin')
                                        ->inlineLabel(),

                                    TextEntry::make('profile.birth_place')
                                        ->label('Tempat Lahir')
                                        ->inlineLabel(),

                                    TextEntry::make('profile.birth_date')
                                        ->label('Tanggal Lahir')
                                        ->date('d F Y')
                                        ->inlineLabel(),

                                    TextEntry::make('profile.address')
                                        ->label('Alamat')
                                        ->inlineLabel(),

                                    TextEntry::make('profile.occupation')
                                        ->label('Pekerjaan')
                                        ->inlineLabel(),
                                        
                                    TextEntry::make('profile.institution')
                                        ->label('Asal Institusi')
                                        ->inlineLabel(),

                                    TextEntry::make('profile.institutionCity')
                                        ->label('Lokasi Institusi')
                                        ->inlineLabel(),
                                        
                                    TextEntry::make('profile.experience')
                                        ->label('Pengalaman')
                                        ->inlineLabel(),
                                    
                                    TextEntry::make('profile.skill')
                                        ->label('Keahlian')
                                        ->badge()
                                        ->separator(',')
                                        ->inlineLabel(),

                                    TextEntry::make('profile.description')
                                        ->label('Deskripsi Diri')
                                        ->markdown()
                                        ->inlineLabel(),
                                ])
                                ->columnSpan([
                                'default' => 12,
                                'md' => 8,
                            ]),
                    ])
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            // 'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            // 'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}