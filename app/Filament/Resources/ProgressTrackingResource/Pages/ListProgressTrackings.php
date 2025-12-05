<?php

namespace App\Filament\Resources\ProgressTrackingResource\Pages;

use App\Filament\Resources\ProgressTrackingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgressTrackings extends ListRecords
{
    protected static string $resource = ProgressTrackingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
