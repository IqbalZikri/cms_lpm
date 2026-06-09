<?php

namespace App\Filament\Resources\Spmis\Pages;

use App\Filament\Resources\Spmis\SpmiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSpmi extends EditRecord
{
    protected static string $resource = SpmiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
