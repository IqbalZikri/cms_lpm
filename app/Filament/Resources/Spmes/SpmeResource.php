<?php

namespace App\Filament\Resources\Spmes;

use App\Filament\Resources\Spmes\Pages\ManageSpmes;
use App\Models\Spme;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use UnitEnum;

class SpmeResource extends Resource
{
    protected static ?string $model = Spme::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::CheckBadge;

    protected static ?string $recordTitleAttribute = 'Spme';

    protected static string|UnitEnum|null $navigationGroup = 'SPME';

    protected static ?string $pluralModelLabel = 'SPME';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('singkatan_lembaga')
                    ->placeholder('BAN-PT')
                    ->columnSpanFull()
                    ->helperText('Contoh Pengisian: BAN-PT')
                    ->required(),
                TextInput::make('nama_lembaga')
                    ->placeholder('Badan Akreditasi Nasional Perguruan Tinggi')
                    ->columnSpanFull()
                    ->helperText('Contoh Pengisian: Badan Akreditasi Nasional Perguruan Tinggi')
                    ->required(),
                Textarea::make('deskripsi')
                    ->placeholder('Berikan deskripsi lembaga')
                    ->helperText('Maksimal 255 karakter')
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->rows(3)
                    ->required(),
                TextInput::make('link')
                    ->placeholder('sapto2.banpt.or.id')
                    ->helperText('Link lembaga')
                    ->columnSpanFull()
                    ->required(),
                Repeater::make('kategori')
                    ->schema([
                        TextInput::make('nm_kategori')
                            ->label('Nama Kategori')
                            ->placeholder('Akreditasi Institusi')
                            ->helperText('Contoh Pengisisan: Akreditasi Institusi')
                            ->required()
                    ])
                    ->required()
                    ->columnSpanFull()
                    ->addActionLabel('Tambah Kategori'),
                Repeater::make('cakupan_bidang')
                    ->schema([
                        TextInput::make('nama_bidang')
                            ->placeholder('Semua bidang (tanpa LAM)')
                            ->helperText('Contoh Pengisian: Semua bidang (tanpa LAM)')
                            ->required(),
                    ])
                    ->required()
                    ->columnSpanFull()
                    ->addActionLabel('Tambah Cakupan Bidang'),
                Select::make('jenis')
                    ->options([
                        'nasional' => 'Nasional',
                        'lam' => 'LAM',
                        'pemerintah' => 'Pemerintah',
                        'lldikti_iv' => 'LLDIKTI IV'
                    ])
                    ->required(),
                Select::make('status')
                    ->options([
                        'aktif' => 'Aktif',
                        'nonaktif' => 'Nonaktif'
                    ])
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Spme')
            ->columns([
                TextColumn::make('singkatan_lembaga')
                    ->searchable(),
                TextColumn::make('nama_lembaga')
                    ->searchable(),
                TextColumn::make('link')
                    ->searchable(),
                TextColumn::make('kategori')
                    ->formatStateUsing(fn(?array $state) => implode(', ', $state ?? [])),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageSpmes::route('/'),
        ];
    }
}
