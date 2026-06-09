<?php

namespace App\Filament\Resources\Kegiatans\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\HtmlString;
use Storage;
use Str;

class KegiatanForm
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
                                        Select::make('kategori_id')
                                            ->label('Kategori')
                                            ->required()
                                            ->relationship('kategori', 'nm_kategori')
                                            ->searchable()
                                            ->preload()
                                            ->prefixIcon('heroicon-o-tag')
                                            ->helperText(
                                                new HtmlString(
                                                    '<a href="/admin/kategoris" class="text-primary-500 hover:underline font-medium">
                                                        + Tambah Kategori Baru
                                                    </a>'
                                                )
                                            ),
                                        TextInput::make('judul')
                                            ->placeholder('Judul Kegiatan')
                                            ->maxLength(255)
                                            ->required()
                                            ->prefixIcon('heroicon-o-pencil-square')
                                            ->placeholder('Masukkan judul kegiatan...')
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function ($operation, $state, callable $set) {
                                                $set('slug', Str::slug($state));
                                            }),
                                    ]),
                                TextInput::make('ringkasan')
                                    ->placeholder('Tulis ringkasan singkat kegiatan')
                                    ->required(),
                            ]),
                        Tab::make('✍️ Konten Berita')
                            ->schema([
                                RichEditor::make('content')
                                    ->label('Isi Berita')
                                    ->placeholder('Tulis Isi Berita')
                                    ->required()
                                    ->columnSpanFull(),
                                FileUpload::make('gambar')
                                    ->label('Gambar Berita (Opsional)')
                                    ->image()
                                    ->imageEditor()
                                    ->disk('private')
                                    ->directory('gambar_berita')
                                    ->visibility('private')
                                    ->imageEditorAspectRatios(['16:9', '4:3', '1:1'])
                                    ->maxSize(2048)
                                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                                    ->helperText('Format: JPG, PNG, JPEG. Maks: 2MB.')
                                    ->columnSpanFull()
                                    ->saveUploadedFileUsing(function ($file, $get, $record) {
                                        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                                        $privatePath = 'gambar_kegiatan/' . $filename;
                                        Storage::disk('private')->put(
                                            $privatePath,
                                            file_get_contents($file->getRealPath())
                                        );
                                        Storage::disk('public')->put(
                                            $privatePath,
                                            file_get_contents($file->getRealPath())
                                        );
                                        return $privatePath;
                                    }),
                            ]),
                        Tab::make('📅 Pengaturan Publikasi')
                            ->schema([
                                Grid::make()
                                    ->schema([
                                        Select::make('status')
                                        ->helperText('Status publish kegiatan')
                                            ->options([
                                                'draft' => 'Draft',
                                                'published' => 'Published',
                                            ])
                                            ->required()
                                            ->prefixIcon('heroicon-o-signal')
                                            ->native(false)
                                            ->live()
                                            ->afterStateUpdated(function ($state, Set $set) {

                                                if ($state === 'published') {
                                                    $set('published_at', now());
                                                } else {
                                                    $set('published_at', null);
                                                }
                                            })
                                        ,
                                        DateTimePicker::make('published_at')
                                            ->label('Tanggal Publikasi')
                                            ->helperText('Kolom ini akan otomatis terisi jika status yang terpilih adalah published')
                                            ->readOnly(),
                                    ]),
                                TextInput::make('slug')
                                    ->placeholder('contoh-judul-kegiatan')
                                    ->helperText('Slug digunakan sebagai URL berita. Gunakan huruf kecil dan tanda hubung.')
                                    ->required()
                            ])

                    ]),
            ]);
    }
}
