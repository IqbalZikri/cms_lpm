<?php

namespace App\Filament\Resources\VisiMisis;

use App\Filament\Resources\VisiMisis\Pages\ListVisiMisis;
use App\Models\VisiMisi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class VisiMisiResource extends Resource
{
    protected static ?string $model = VisiMisi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Star;

    protected static string|UnitEnum|null $navigationGroup = 'Profil';

    protected static ?string $navigationLabel = 'Visi Misi';

    protected static ?string $pluralModelLabel = 'Visi Misi';

    public static function getPages(): array
    {
        return [
            'index' => ListVisiMisis::route('/'),
        ];
    }
}
