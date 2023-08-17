<?php

namespace App\Filament\Resources\ProfesserResource\Pages;

use App\Filament\Resources\ProfesserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfessers extends ListRecords
{
    protected static string $resource = ProfesserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
