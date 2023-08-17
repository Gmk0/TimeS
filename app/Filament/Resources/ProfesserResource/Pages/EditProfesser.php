<?php

namespace App\Filament\Resources\ProfesserResource\Pages;

use App\Filament\Resources\ProfesserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfesser extends EditRecord
{
    protected static string $resource = ProfesserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
