<?php

namespace App\Filament\Resources\ProgressTrackingResource\Pages;

use App\Filament\Resources\ProgressTrackingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProgressTracking extends EditRecord
{
    protected static string $resource = ProgressTrackingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
