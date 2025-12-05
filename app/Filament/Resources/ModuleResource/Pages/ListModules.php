<?php

namespace App\Filament\Resources\ModuleResource\Pages;

use App\Filament\Resources\ModuleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class ListModules extends ListRecords
{
    protected static string $resource = ModuleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('create_module') // Gunakan Action biasa, bukan CreateAction standar
                ->label('Tambah Modul Baru')
                ->icon('heroicon-o-plus')
                ->modalHeading('Inisiasi Modul Baru')
                ->modalSubmitActionLabel('Buat & Lanjut')
                ->modalCancelActionLabel('Batal')
                ->form([
                    TextInput::make('module_title')
                        ->label('Judul Modul')
                        ->required()
                        ->maxLength(255)
                        ->autofocus(),
                        
                    TextInput::make('module_category')
                        ->label('Kategori')
                        ->placeholder('Pilih dari daftar atau ketik kategori baru...')
                        ->datalist([
                            'Komunikasi & Visual',
                            // tambah kategori baru disini
                        ])
                        ->required(),

                    TextInput::make('module_publisher')
                        ->label('Nama Pengembang / Penerbit')
                        ->default('Mika Education')
                        ->required(),
                ])
                ->action(function (array $data) {
                    // 1. Simpan Data Manual
                    $module = new \App\Models\Module();

                    $module->module_title = $data['module_title'];
                    $module->module_category = $data['module_category'];
                    
                    $module->module_description = '-';
                    $module->module_level = 1;
                    $module->mainSubject_num = 0;
                    $module->module_type = 0;
                    $module->module_status = 0;
                    $module->module_introduce = 0;
                    $module->module_asessment = 0;
                    $module->moduleAsessmen_num = 0;
                    $module->module_practice = 0;
                    
                    $module->save();

                    return redirect()->to(ModuleResource::getUrl('edit', [
                        'record' => $module->module_id,
                    ]));
                }),
        ];
    }
}
