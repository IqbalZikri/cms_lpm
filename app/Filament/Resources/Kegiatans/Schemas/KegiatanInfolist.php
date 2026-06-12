<?php

namespace App\Filament\Resources\Kegiatans\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class KegiatanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make()
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('📰 Informasi Utama')
                            ->schema([
                                Grid::make()
                                    ->schema([
                                        TextEntry::make('kategori.nm_kategori')
                                            ->label('Kategori'),
                                        TextEntry::make('judul'),
                                    ]),
                                TextEntry::make('ringkasan'),
                            ]),
                        Tab::make('✍️ Konten Berita')
                            ->schema([
                                TextEntry::make('content')
                                    ->label('Isi Berita')
                                    ->html()
                                    ->columnSpanFull(),
                                ImageEntry::make('gambar')
                                    ->height(400)
                                    ->label('Gambar Berita')
                                    ->placeholder('-')
                            ]),
                        Tab::make('📅 Pengaturan Publikasi')
                            ->schema([
                                Grid::make()
                                    ->schema([
                                        TextEntry::make('status')
                                            ->badge()
                                            ->formatStateUsing(fn($state) => match ($state) {
                                                'published' => 'Published',
                                                'draft' => 'Draft',
                                                default => ucfirst($state),
                                            })
                                            ->color(fn($state) => $state === 'published' ? 'success' : 'danger'),
                                        TextEntry::make('published_at')->date(),
                                        IconEntry::make('berita_utama')
                                        ->boolean()
                                    ])
                            ]),
                        Tab::make('Waktu Pembuatan')
                            ->icon(Heroicon::CalendarDateRange)
                            ->schema([
                                Grid::make()
                                    ->schema([
                                        TextEntry::make('created_at')
                                            ->dateTime()
                                            ->placeholder('-'),
                                        TextEntry::make('updated_at')
                                            ->dateTime()
                                            ->placeholder('-'),
                                        TextEntry::make('user.name')
                                        ->label('Nama pembuat')
                                            ->placeholder('-')
                                    ])
                            ])
                    ]),
            ]);
    }
}
