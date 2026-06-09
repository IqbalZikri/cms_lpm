<?php

namespace App\Filament\Resources\Spmis;

use App\Filament\Resources\Spmis\Pages\CreateSpmi;
use App\Filament\Resources\Spmis\Pages\EditSpmi;
use App\Filament\Resources\Spmis\Pages\ListSpmis;
use App\Filament\Resources\Spmis\Schemas\SpmiForm;
use App\Filament\Resources\Spmis\Tables\SpmisTable;
use App\Models\Spmi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class SpmiResource extends Resource
{
    protected static ?string $model = Spmi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ShieldCheck;

    protected static ?string $recordTitleAttribute = 'Spmi';

    protected static string|UnitEnum|null $navigationGroup = 'SPMI';

    protected static ?string $pluralModelLabel = 'SPMI';

    public static function getPages(): array
    {
        return [
            'index' => ListSpmis::route('/'),
        ];
    }
}
