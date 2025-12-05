<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ModuleResource\Pages;
use App\Filament\Resources\ModuleResource\RelationManagers;
use App\Models\Module;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Infolists\Components\ImageEntry;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ModuleResource extends Resource
{
    protected static ?string $model = Module::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationGroup = 'Konten Pembelajaran';
    protected static ?int $navigationSort = 1; 
    protected static ?string $navigationLabel = 'Modul Pembelajaran';

    protected static ?string $pluralModelLabel = 'Daftar Modul Pembelajaran';
    protected static ?string $recordTitleAttribute = 'module_title';

    public static function form (Form $form): Form
    {
        return $form
            ->schema([
                /*
                |--------------------------------------------------------------------------
                | INFORMASI DASAR
                |--------------------------------------------------------------------------
                */
                Section::make('Informasi Dasar')
                    ->schema([
                        FileUpload::make('module_publisher_banner')
                            ->label('Banner Modul')
                            ->image()
                            ->disk('public')
                            ->directory('modules/banners')
                            ->columnSpanFull()
                            ->imagePreviewHeight('250')
                            ->imageEditor()
                            ->required(),

                        TextInput::make('module_title')
                            ->label('Judul Modul')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Textarea::make('module_description')
                            ->label('Deskripsi Modul')
                            ->rows(10)
                            ->columnSpanFull(),

                        Grid::make(3)
                            ->schema([
                                Select::make('module_category')
                                    ->label('Kategori')
                                    ->options([
                                        'Komunikasi & Visual' => 'Komunikasi & Visual',
                                        // tambah kategori baru disini
                                    ])
                                    ->searchable()
                                    ->required(),

                                Select::make('module_level')
                                    ->label('Tingkatan Modul')
                                    ->options([
                                        1 => 'Dasar',
                                        2 => 'Dasar-Menengah',
                                        3 => 'Menengah',
                                        4 => 'Menengah-Tinggi',
                                        5 => 'Tinggi',
                                    ])
                                    ->required(),
                                
                                TextInput::make('module_duration')
                                    ->label('Durasi Estimasi')
                                    ->placeholder('Dalam menit')
                                    ->prefixIcon('heroicon-m-clock'),
                            ]),

                        \Filament\Forms\Components\TagsInput::make('module_point')
                            ->label('Topik Bahasan (Poin-poin yang akan Dipelajari)')
                            ->placeholder('Ketik poin pembelajaran lalu tekan Enter')
                            ->columnSpanFull()
                            ->separator(','),
                    ])
                    ->columnSpan(2),

                /*
                |--------------------------------------------------------------------------
                | INFORMASI PENGEMBANG
                |--------------------------------------------------------------------------
                */
                Section::make('Informasi Pengembang')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                FileUpload::make('module_publisher_logo')
                                    ->label('Logo Pengembang')
                                    ->image()
                                    ->avatar()
                                    ->imageEditor()
                                    ->directory('modules/logos'),
                                
                                TextInput::make('module_publisher_name')
                                    ->label('Nama Pengembang')
                                    ->default('Media Visual Komunikasi Anak')
                                    ->placeholder('Contoh: MIKA Education')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('module_publisher', $state);
                                    }),

                                Hidden::make('module_publisher')
                                    ->default('Media Visual Komunikasi Anak')
                                    ->dehydrated(true),

                                DatePicker::make('module_publish_date')
                                    ->label('Tanggal Diluncurkan')
                                    ->native(false)
                                    ->displayFormat('d F Y'),
                            ]),
                    ])
                    ->compact()
                    ->columnSpanFull(),

                /*
                |--------------------------------------------------------------------------
                | STATUS & PUBLIKASI
                |--------------------------------------------------------------------------
                */
                Section::make('Status & Publikasi')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Toggle::make('module_status')
                                    ->label('Status Publikasi')
                                    ->onColor('success')
                                    ->offColor('danger')
                                    ->inline(false)
                                    ->helperText('Aktifkan jika modul ini sedang aktif dan dapat diakses'),
                                
                                Toggle::make('module_type')
                                    ->label('Tipe Modul')
                                    ->inline(false)
                                    ->helperText('Aktifkan jika modul ini bisa dikerjakan secara berulang'),
                            
                                FileUpload::make('module_certificate')
                                    ->label('Template Sertifikat')
                                    ->disk('public')
                                    ->directory('modules/certificates')
                                    ->acceptedFileTypes(['image/*', 'application/pdf'])
                                    ->openable()
                                    ->downloadable()
                                    ->imagePreviewHeight('300')      // <— Tinggi disamakan

                                    ->columnSpan(1),

                                FileUpload::make('module_teaser')
                                    ->label('Video Pengenalan (Teaser)')
                                    ->helperText('Video ini digunakan untuk Teaser (15s) dan Bab Pengenalan (Full).')
                                    ->disk('s3_general')
                                    ->visibility('public')
                                    ->acceptedFileTypes(['video/mp4', 'video/quicktime', 'video/webm'])
                                    ->maxSize(102400)
                                    ->downloadable()
                                    ->imagePreviewHeight('320')
                                    ->preserveFilenames()
                                    ->columnSpan(1)

                                    ->getUploadedFileNameForStorageUsing(
                                        fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                            ->prepend('modules/teasers/'),
                                    ),
                            ])
                            ->columnSpan(1),
                    ])
                    ->collapsible(),

                /*
                |--------------------------------------------------------------------------
                | KURIKULUM & MATERI
                |--------------------------------------------------------------------------
                */
                Section::make('Kurikulum & Materi')
                    ->heading(fn ($record) =>
                        'Kurikulum & Materi (' .
                        ($record ? $record->subjects()->count() : 0)
                        . ' Tema)'
                    )
                    ->description('Susun Tema (Bab Utama) dan Materi (Sub-Bab) di sini.')
                    ->schema([

                        Repeater::make('subjects')
                            ->relationship()
                            ->label('Tema / Materi Utama')

                            ->itemLabel(fn (array $state): ?string =>
                                ($state['submodule_title'] ?? 'Tema Baru') .
                                ' (' . count($state['submodules'] ?? []) . ' Materi)'
                            )

                            ->schema([

                                /*
                                |-----------------------|
                                | FORM BAB / MATERI     |
                                |-----------------------|
                                */
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('submodule_title')
                                            ->label('Judul Bab')
                                            ->required(),

                                        TextInput::make('subject_type')
                                            ->label('Tipe (Kode)')
                                            ->default('submodul1'),

                                        Textarea::make('submodule_description')
                                            ->label('Deskripsi Bab')
                                            ->rows(2)
                                            ->columnSpanFull(),

                                        TextInput::make('submoduleSubject_num')
                                            ->label('Jumlah Materi (Manual)')
                                            ->numeric()
                                            ->default(0),
                                    ]),

                                /*
                                |-----------------------|
                                | FORM SUB-BAB / MATERI |
                                |-----------------------|
                                */
                                Repeater::make('submodules')
                                    ->relationship()
                                    ->label('Isi Materi (Sub-bab)')
                                    ->collapsed()

                                    ->itemLabel(fn (array $state): ?string =>
                                        $state['submoduleSubject_title'] ?? 'Materi Baru'
                                    )

                                    ->schema([
                                        TextInput::make('submoduleSubject_title')
                                            ->label('Judul Materi')
                                            ->required()
                                            ->columnSpanFull(),
                                        
                                        Textarea::make('submoduleSubject_description')
                                            ->label('Deskripsi Materi')
                                            ->rows(2)
                                            ->columnSpanFull(),

                                        FileUpload::make('submoduleSubject_file')
                                            ->label('File Materi (Unduhan)')
                                            ->multiple()
                                            ->disk('public')
                                            ->directory('module-files')
                                            ->downloadable()
                                            ->openable()
                                            ->columnSpanFull(),
                                            
                                        FileUpload::make('submoduleSubject_url')
                                            ->label('Upload Video Materi')
                                            ->disk('s3')
                                            ->directory('materi-video')
                                            ->visibility('public')
                                            ->acceptedFileTypes(['video/mp4', 'video/quicktime', 'video/webm'])
                                            ->maxSize(512000)
                                            ->preserveFilenames()
                                            ->columnSpanFull(),
                                        
                                        RichEditor::make('submoduleSubject_text')
                                            ->label('Narasi / Teks Materi')
                                            ->columnSpanFull(),

                                        RichEditor::make('submoduleSubject_result')
                                            ->label('Rangkuman / Hasil')
                                            ->columnSpanFull(),
                                        
                                        Toggle::make('submoduleSubject_quiz')
                                            ->label('Ada Kuis Interaktif di materi ini?')
                                            ->inline(false)
                                            ->live()
                                            ->afterStateUpdated(function ($state, callable $set) {
                                                if (!$state) $set('quizzes', []);
                                            }),

                                        /*
                                        |-----------------------|
                                        | REPEATER KUIS         |
                                        |-----------------------|
                                        */
                                        Repeater::make('quizzes')
                                            ->relationship()
                                            ->label('Konfigurasi Kuis Interaktif')

                                            ->visible(fn (\Filament\Forms\Get $get) =>
                                                $get('submoduleSubject_quiz') === true
                                            )

                                            ->itemLabel(fn (array $state): ?string =>
                                                $state['quiz_title'] ?? 'Kuis Baru'
                                            )

                                            ->maxItems(1)
                                            ->defaultItems(0)
                                            ->reorderable(false)
                                            ->deletable(false)

                                            ->schema([
                                                Grid::make(2)
                                                    ->schema([
                                                        TextInput::make('quiz_title')
                                                            ->label('Judul Kuis')
                                                            ->required()
                                                            ->placeholder('Contoh: Kuis Memahami Autisme')
                                                            ->columnSpanFull(),
                                                        
                                                        Textarea::make('quiz_instruction')
                                                            ->label('Instruksi Pengerjaan')
                                                            ->rows(2)
                                                            ->required()
                                                            ->columnSpanFull(),

                                                        \Filament\Forms\Components\Placeholder::make('info_soal')
                                                            ->label('Manajemen Butir Soal')
                                                            ->content(new \Illuminate\Support\HtmlString(
                                                                '<div class="text-sm text-gray-500 bg-gray-50 p-3 rounded border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                                                                    <span class="font-bold text-primary-600">Langkah Selanjutnya:</span><br>
                                                                    1. Simpan Modul ini terlebih dahulu.<br>
                                                                    2. Masuk ke menu <strong>"Bank Soal"</strong> di sidebar.<br>
                                                                    3. Tambahkan pertanyaan dan kaitkan dengan Judul Kuis ini.
                                                                </div>'
                                                            ))
                                                            ->columnSpanFull(),
                                                    ])
                                            ])
                                    ])
                                    ->addActionLabel('Tambah Materi')
                                    ->reorderableWithButtons()
                                    ->columnSpanFull(),
                            ])
                            ->collapsed()
                            ->cloneable()
                            ->addActionLabel('Tambah Tema Baru')
                            ->reorderableWithButtons(),
                    ]),

                /*
                |--------------------------------------------------------------------------
                | KONFIGURASI BAB
                |--------------------------------------------------------------------------
                */
                Section::make('Konfigurasi Bab Tambahan')
                    ->description('Aktifkan bab khusus seperti Pengenalan, Studi Kasus, dan Ujian.')
                    ->schema([
                        
                        Group::make([
                            Toggle::make('module_introduce')
                                ->label('Bab Pengenalan')
                                ->helperText('Aktifkan untuk menampilkan bab awal berisi video pengenalan.')
                                ->onColor('success')
                                ->inline(false)
                                ->live(),

                            \Filament\Forms\Components\Placeholder::make('info_video_intro')
                                ->label('Sumber Video')
                                ->content(new \Illuminate\Support\HtmlString(
                                    '<span class="text-gray-500 text-sm flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                                        Video diambil otomatis dari Video Teaser (Versi Full).
                                    </span>'
                                ))->visible(fn (\Filament\Forms\Get $get) => $get('module_introduce') === true),
                        
                            Section::make('Konten Pengenalan')
                                ->schema([
                                    RichEditor::make('introduce_description')
                                        ->label('Deskripsi / Narasi Pengenalan')
                                        ->placeholder('Tuliskan pengantar materi di sini...')
                                        ->required(),

                                    FileUpload::make('introduce_file')
                                        ->label('Lampiran File (Opsional)')
                                        ->disk('public')
                                        ->directory('modules/introductions')
                                        ->downloadable()
                                        ->openable(),
                                ])
                                ->visible(fn (\Filament\Forms\Get $get) => $get('module_introduce') === true)
                                ->compact(),
                        ])->columnSpanFull(),

                        Group::make([
                            Toggle::make('module_practice')
                                ->label('Bab Studi Kasus')
                                ->helperText('Aktifkan bab khusus untuk tugas/praktik siswa.')
                                ->onColor('success')
                                ->inline(false)
                                ->live(),

                            Section::make('Konten Studi Kasus')
                                ->schema([
                                    RichEditor::make('practice_instruction')
                                        ->label('Narasi / Instruksi Studi Kasus')
                                        ->placeholder('Tuliskan skenario kasus dan instruksi pengerjaan di sini...')
                                        ->required(),
                                        
                                    FileUpload::make('practice_file') 
                                        ->label('Lampiran File (Opsional)')
                                        ->disk('public')
                                        ->directory('modules/practices')
                                        ->downloadable(),
                                ])
                                ->visible(fn (\Filament\Forms\Get $get) => $get('module_practice') === true)
                                ->compact(),
                        ])->columnSpanFull(),

                        Group::make([
                            Toggle::make('module_asessment')
                                ->label('Bab Penilaian (Asessment)')
                                ->helperText('Aktifkan Pre-test dan Post-test.')
                                ->onColor('success')
                                ->inline(false)
                                ->live(),

                        Repeater::make('assessments')
                            ->relationship(
                                modifyQueryUsing: fn (Builder $query) => $query->where('asessment_id', '!=', 3)
                            )
                            ->label('Daftar Penilaian')
                            
                            ->itemLabel(fn (array $state): ?string => match ((int)($state['asessment_id'] ?? 0)) {
                                1 => 'Penilaian I (Pre-test)',
                                2 => 'Penilaian II (Post-test)',
                                default => ($state['asessment_title'] ?? 'Penilaian Baru') . ' (ID: ' . ($state['asessment_id'] ?? '-') . ')'
                            })
                            
                            ->visible(fn (\Filament\Forms\Get $get) => $get('module_asessment') === true)
                            ->schema([
                                Section::make('Informasi Ujian')
                                    ->schema([
                                        Grid::make(2)->schema([
                                            TextInput::make('asessment_id')
                                                ->label('ID Kategori')
                                                ->numeric()
                                                ->required()
                                                ->readOnly(),

                                            TextInput::make('asessment_title')
                                                ->label('Nama Penilaian')
                                                ->required(),

                                            Select::make('asessment_type')
                                                ->label('Tipe')
                                                ->options([
                                                    'limited' => 'Ujian (Sekali/Terbatas)',
                                                    'repeatable' => 'Latihan (Bisa Diulang)',
                                                ])
                                                ->required(),

                                            Group::make([
                                                Select::make('asessment_duration')
                                                    ->label('Mode Waktu')
                                                    ->options([
                                                        'unlimited' => 'Tidak Terbatas',
                                                        'limited' => 'Dibatasi Waktu',
                                                    ])
                                                    ->live()
                                                    ->default('unlimited'),

                                                TextInput::make('asessment_time_limit')
                                                    ->label('Menit')
                                                    ->hiddenLabel()
                                                    ->numeric()
                                                    ->prefix('Batas:')
                                                    ->suffix('Menit')
                                                    ->visible(fn (\Filament\Forms\Get $get) => $get('asessment_duration') === 'limited')
                                                    ->required(fn (\Filament\Forms\Get $get) => $get('asessment_duration') === 'limited'),
                                            ])->columns(2)->columnSpanFull(),
                                        ]),

                                        \Filament\Forms\Components\Fieldset::make('Standar Nilai Ujian (0-100)')
                                            ->schema([
                                                TextInput::make('asessmentValue_min')
                                                    ->label('KKM (Syarat Lulus)')
                                                    ->numeric()
                                                    ->default(70)
                                                    ->required(),

                                                TextInput::make('asessmentValue_max')
                                                    ->label('Nilai Maksimal')
                                                    ->numeric()
                                                    ->default(100)
                                                    ->readOnly(),
                                            ])->columns(2),
                                    ])
                                    ->compact(),

                                Section::make('Konfigurasi Evaluasi')
                                    ->description('Pengaturan kuesioner evaluasi yang muncul setelah ujian selesai.')
                                    ->schema([
                                        Toggle::make('has_evaluation') 
                                            ->label(fn (\Filament\Forms\Get $get) => 
                                                $get('has_evaluation') ? 'Evaluasi Aktif' : 'Evaluasi Non-Aktif'
                                            )
                                            ->onColor('success')
                                            ->offColor('danger')
                                            ->default(true)
                                            ->live()
                                            ->dehydrated(false)
                                            
                                            ->afterStateHydrated(function (Toggle $component, $record) {
                                                if (!$record) {
                                                    $component->state(true);
                                                    return;
                                                }

                                                $hasEvaluation = \App\Models\ModuleAsessment::where('module_id', $record->module_id)
                                                    ->where('asessment_id', 3)
                                                    ->exists();

                                                $component->state($hasEvaluation);
                                            }),

                                        Grid::make(2)
                                            ->visible(fn (\Filament\Forms\Get $get) => $get('has_evaluation') === true)
                                            ->schema([
                                                TextInput::make('eval_min_dummy')
                                                    ->label('Skala Min (Likert)')
                                                    ->disabled()
                                                    ->placeholder('1 (Sangat Tidak Setuju)'),

                                                TextInput::make('eval_max_dummy')
                                                    ->label('Skala Max (Likert)')
                                                    ->disabled()
                                                    ->placeholder('5 (Sangat Setuju)'),
                                                
                                                \Filament\Forms\Components\Placeholder::make('info_eval_link')
                                                    ->hiddenLabel()
                                                    ->content(new \Illuminate\Support\HtmlString(
                                                        '<span class="text-xs text-gray-500">
                                                            * Data evaluasi menggunakan referensi Bank Soal ID: 3.
                                                        </span>'
                                                    ))->columnSpanFull(),
                                            ]),
                                    ])->collapsible()->compact(),
                            ])  ->collapsed()
                                ->cloneable() 
                                ->deletable()
                                ->itemLabel(fn (array $state): ?string => match ((int)($state['asessment_id'] ?? 0)) {
                                    1 => 'Penilaian I (Pre-test)',
                                    2 => 'Penilaian II (Post-test)',
                                    default => ($state['asessment_title'] ?? 'Penilaian Baru') . ' (ID: ' . ($state['asessment_id'] ?? '-') . ')'
                                })
                                ->addActionLabel('Tambah Penilaian Baru')
                                ->columnSpanFull(),
                        ])->columnSpanFull(),
                    ])
                    ->collapsible(),
            ]);
    }


    // --- HALAMAN TABEL (MONITORING SAJA) ---
    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query) => $query->withTrashed()) // Tampilkan sampah
            ->columns([
                TextColumn::make('module_id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),
                
                TextColumn::make('module_title')
                    ->label('Judul Modul')
                    ->searchable()
                    ->weight('bold')
                    ->description(fn (Module $record): string => \Illuminate\Support\Str::limit($record->module_description, 40)),

                TextColumn::make('module_category')->label('Kategori')->badge()->color('info'),
                
                TextColumn::make('subjects_count')
                    ->counts('subjects')
                    ->label('Jumlah Materi')
                    ->alignCenter(),
                
                TextColumn::make('module_level')
                    ->label('Tingkatan')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        '1' => 'Dasar',
                        '2' => 'Dasar-Menengah',
                        '3' => 'Menengah',
                        '4' => 'Menengah-Tinggi',
                        '5' => 'Tinggi',
                        default => $state,
                    })
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        '1', '2' => 'success', // Hijau
                        '3' => 'warning',      // Orange 
                        '4', '5' => 'danger',  // Merah
                        default => 'gray',
                    })
                    ->sortable(),

                TextColumn::make('module_type')
                    ->label('Tipe')
                    ->formatStateUsing(fn (bool $state): string => $state ? 'Berulang' : 'Sekali')
                    ->badge()
                    ->color(fn (bool $state): string => $state ? 'success' : 'primary'),

                TextColumn::make('module_rating')
                    ->label('Rating')
                    ->icon('heroicon-m-star')
                    ->iconColor('warning')
                    ->numeric(
                        decimalPlaces: 1,
                    )
                    ->sortable(),

                TextColumn::make('module_status')
                    ->label('Status')
                    ->badge()
                    ->width('150px')
                    ->alignCenter()                    
                    ->formatStateUsing(fn (bool $state) => $state ? 'Aktif' : 'Nonaktif')
                    ->color(fn (bool $state) => $state ? 'success' : 'danger')
                    ->icon(fn (bool $state) => $state ? 'heroicon-m-check-circle' : 'heroicon-m-x-circle')                    
                    ->action(
                        \Filament\Tables\Actions\Action::make('toggleStatus')
                            ->requiresConfirmation()                            
                            ->modalHeading(fn (Module $record) => $record->module_status 
                                ? 'Non-Aktifkan Status Modul?' 
                                : 'Aktifkan Status Modul?'
                            )                            
                            ->modalDescription(fn (Module $record) => $record->module_status 
                                ? 'Modul ini akan menjadi tidak aktif dan disembunyikan dari halaman pembelajaran' 
                                : 'Modul ini akan menjadi aktif dan dapat diakses di halaman pembelajaran.'
                            )                            
                            ->modalSubmitActionLabel(fn (Module $record) => $record->module_status 
                                ? 'Nonaktifkan' 
                                : 'Aktifkan'
                            )
                            ->modalCancelActionLabel('Batal')                            
                            ->color(fn (Module $record) => $record->module_status ? 'danger' : 'success')
                            ->action(fn (Module $record) => $record->update(['module_status' => ! $record->module_status]))
                    ),

                TextColumn::make('created_at')
                    ->dateTime('d M Y')
                    ->label('Dibuat'),
            ])
            
            ->recordClasses(fn (Module $record) => 
                $record->trashed() ? 'trashed-row' : null
            )

            ->actions([
                Tables\Actions\DeleteAction::make()
                    ->iconButton()
                    ->modalHeading('Non-Aktifkan Modul')
                    ->modalSubmitActionLabel('Nonaktifkan')
                    ->modalCancelActionLabel('Batal')
                    ->modalDescription('Modul ini akan dihapus sementara dan disembunyikan dari halaman pembelajaran.')
                    ->visible(fn (Module $record) => ! $record->trashed()),

                Tables\Actions\RestoreAction::make()
                    ->iconButton()
                    ->color('success')
                    ->modalHeading('Terbitkan Kembali')
                    ->modalSubmitActionLabel('Terbitkan')
                    ->modalCancelActionLabel('Batal')
                    ->modalDescription('Modul ini akan diterbitkan dan ditampilkan kembali pada halaman pembelajaran.')
                    ->visible(fn (Module $record) => $record->trashed()),

                Tables\Actions\ForceDeleteAction::make()
                    ->iconButton()
                    ->color('danger')
                    ->icon('heroicon-m-x-mark')
                    ->modalHeading('Hapus Permanen')
                    ->modalSubmitActionLabel('Hapus Permanen')
                    ->modalCancelActionLabel('Batal')
                    ->modalDescription('Modul ini akan dihapus secara permanen dan tidak bisa dikembalikan lagi')
                    ->visible(fn (Module $record) => $record->trashed()),
            ])
            ->actionsColumnLabel('Aksi')
            ->actionsAlignment('center')
            ->recordUrl(fn (Module $record): string => Pages\EditModule::getUrl(['record' => $record->module_id]));
        }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListModules::route('/'),
            // 'create' => Pages\CreateModule::route('/create'), // Matikan create page
            'edit' => Pages\EditModule::route('/{record}/edit'),
        ];
    }
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}
