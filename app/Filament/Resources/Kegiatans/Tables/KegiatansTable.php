<?php

namespace App\Filament\Resources\Kegiatans\Tables;

use App\Models\Kegiatan;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KegiatansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->searchable(),
                ImageColumn::make('gambar')
                    ->placeholder('-'),
                TextColumn::make('status')
                    ->badge()
                    ->formatStateUsing(fn($state) => match ($state) {
                        'published' => 'Published',
                        'draft' => 'Draft',
                    })
                    ->color(fn($state) => $state === 'published' ? 'success' : 'danger')
                    ->searchable(),
                TextColumn::make('published_at')
                    ->label('Tanggal Publish')
                    ->date()
                    ->sortable(),
                IconColumn::make('berita_utama')
                    ->boolean(),
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

            ])
            ->recordActions([
                Action::make('Published')
                    ->action(function (Kegiatan $kegiatan) {
                        $kegiatan->status = 'published';
                        $kegiatan->published_at = now();
                        $kegiatan->save();

                        Notification::make()
                            ->title('Berhasil ubah status berita')
                            ->success()
                            ->send();
                    })
                    ->hidden(fn(Kegiatan $kegiatan) => $kegiatan->status === 'published'),
                Action::make('Draft')
                    ->color('gray')
                    ->icon('heroicon-o-pencil-square')
                    ->action(function (Kegiatan $kegiatan) {
                        $kegiatan->status = 'draft';
                        $kegiatan->published_at = null;
                        $kegiatan->save();

                        Notification::make()
                            ->title('Berhasil ubah status kegiatan')
                            ->success()
                            ->send();
                    })
                    ->hidden(fn(Kegiatan $kegiatan) => $kegiatan->status === 'draft'),
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make()
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
