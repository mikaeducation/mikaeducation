<?php

namespace App\Filament\Resources\UserCaseStudyResource\Pages;

use App\Filament\Resources\UserCaseStudyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserCaseStudy extends EditRecord
{
    protected static string $resource = UserCaseStudyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
