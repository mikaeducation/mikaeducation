<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Contracts\Support\Htmlable;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    public function getTitle(): string | Htmlable
    {
        return 'Informasi Detail';
    }

    public function getBreadcrumb(): string
    {
        return 'Informasi Detail';
    }

    protected function getHeaderActions(): array
    {
        return [
            // EditAction::make(), <--- tidak ada button edit di dalam informasi detail
        ];
    }
}
