<?php

namespace App\Filament\Resources\Spmis\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SpmiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('tentang_spmi')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('deskripsi_monev')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('ruang_lingkup_monev')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('output_monev')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('deskripsi_ami')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('tujuan_ami')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('mekanisme_ami')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('dokumen_spmi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
