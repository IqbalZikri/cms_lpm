<?php

namespace App\Filament\Resources\Tentangs;

use App\Filament\Resources\Tentangs\Pages\CreateTentang;
use App\Filament\Resources\Tentangs\Pages\EditTentang;
use App\Filament\Resources\Tentangs\Pages\ListTentangs;
use App\Filament\Resources\Tentangs\Schemas\TentangForm;
use App\Filament\Resources\Tentangs\Tables\TentangsTable;
use App\Models\Tentang;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class TentangResource extends Resource
{
    protected static ?string $model = Tentang::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::InformationCircle;

    protected static ?string $recordTitleAttribute = 'Tentang';

    protected static string|UnitEnum|null $navigationGroup = 'Profil';

    protected static ?string $pluralModelLabel = 'Tentang';

    public static function form(Schema $schema): Schema
    {
        return TentangForm::configure($schema);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTentangs::route('/'),
        ];
    }
}
