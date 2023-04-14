<?php

namespace App\Filament\Resources\StudyResource\Pages;

use App\Filament\Resources\StudyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudies extends ListRecords
{
    protected static string $resource = StudyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
