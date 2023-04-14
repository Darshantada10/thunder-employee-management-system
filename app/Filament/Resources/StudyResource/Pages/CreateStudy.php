<?php

namespace App\Filament\Resources\StudyResource\Pages;

use App\Filament\Resources\StudyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateStudy extends CreateRecord
{
    // public function __construct() {
    //     dd("called");
    // }
    protected static string $resource = StudyResource::class;
}
