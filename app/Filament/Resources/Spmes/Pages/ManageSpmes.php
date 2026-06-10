<?php

namespace App\Filament\Resources\Spmes\Pages;

use App\Filament\Resources\Spmes\SpmeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageSpmes extends ManageRecords
{
    protected static string $resource = SpmeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
