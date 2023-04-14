<?php

namespace App\Filament\Resources\StudyResource\Pages;

use App\Filament\Resources\StudyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudy extends EditRecord
{
    protected static string $resource = StudyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
