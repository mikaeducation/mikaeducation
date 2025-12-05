<?php

namespace App\Filament\Resources\UserCaseStudyResource\Pages;

use App\Filament\Resources\UserCaseStudyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserCaseStudies extends ListRecords
{
    protected static string $resource = UserCaseStudyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
