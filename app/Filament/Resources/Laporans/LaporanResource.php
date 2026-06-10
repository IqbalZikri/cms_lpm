<?php

namespace App\Filament\Resources\Laporans;

use App\Filament\Resources\Laporans\Pages\ListLaporans;
use App\Models\Laporan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class LaporanResource extends Resource
{
    protected static ?string $model = Laporan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Laporan';

    protected static string|UnitEnum|null $navigationGroup = 'Laporan';

    protected static ?string $pluralModelLabel = 'Laporan';

    public static function getPages(): array
    {
        return [
            'index' => ListLaporans::route('/'),
        ];
    }
}
