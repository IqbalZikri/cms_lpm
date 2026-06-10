<?php

namespace App\Filament\Resources\Laporans\Pages;

use App\Filament\Resources\Laporans\LaporanResource;
use App\Models\Laporan;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Schema;

class ListLaporans extends Page
{
    use InteractsWithSchemas;

    protected static string $resource = LaporanResource::class;

    protected static ?string $title = 'Laporan';

    protected string $view = 'filament.resources.laporans.pages.laporan';

    public ?array $data = [];

    public function mount(): void
    {
        $laporan = Laporan::first();

        if ($laporan) {
            $this->form->fill($laporan->toArray());
        }
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make()
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Monev')
                            ->schema([
                                Textarea::make('deskripsi_monev')
                                    ->label('Deskripsi Monev')
                                    ->helperText('Berikan deskripsi mengenai Monev'),
                                Repeater::make('dokumen_monev')
                                    ->schema([
                                        TextInput::make('nama_dokumen')
                                            ->required(),
                                        FileUpload::make('file')
                                            ->label('Dokumen Monev')
                                            ->maxFiles(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('dokumen_monev')
                                            ->helperText('Maksimal ukuran file 2 MB'),
                                    ]),
                                TextInput::make('informasi_tambahan_monev')
                                    ->label('Informasi Tambahan Monev')
                                    ->helperText('Berikan jika terdapat inforamsi tambahan mengenai dokumen'),
                            ]),
                        Tab::make('AMI')
                            ->schema([
                                Textarea::make('deskripsi_ami')
                                    ->label('Deskripsi AMI'),
                                Repeater::make('dokumen_ami')
                                    ->schema([
                                        TextInput::make('nama_dokumen')
                                            ->required(),
                                        FileUpload::make('file')
                                            ->label('Dokumen AMI')
                                            ->maxFiles(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('dokumen_ami')
                                            ->helperText('Maksimal ukuran file 2 MB'),
                                    ]),
                                TextInput::make('informasi_tambahan_ami')
                                    ->label('Informasi Tambahan ami'),
                            ]),
                        Tab::make('RTM')
                            ->schema([
                                Textarea::make('deskripsi_rtm')
                                    ->label('Deskripsi RTM'),
                                Repeater::make('dokumen_rtm')
                                    ->schema([
                                        TextInput::make('nama_dokumen')
                                            ->required(),
                                        FileUpload::make('file')
                                            ->label('Dokumen RTM')
                                            ->maxFiles(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('dokumen_rtm')
                                            ->helperText('Maksimal ukuran file 2 MB'),
                                    ]),
                                TextInput::make('informasi_tambahan_rtm')
                                    ->label('Informasi Tambahan RTM'),
                            ]),
                        Tab::make('RTL')
                            ->schema([
                                Textarea::make('deskripsi_rtl')
                                    ->label('Deskripsi RTl'),
                                Repeater::make('dokumen_rtl')
                                    ->schema([
                                        TextInput::make('nama_dokumen')
                                            ->required(),
                                        FileUpload::make('file')
                                            ->label('Dokumen RTL')
                                            ->maxFiles(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('dokumen_rtl')
                                            ->helperText('Maksimal ukuran file 2 MB'),
                                    ]),
                                TextInput::make('informasi_tambahan_rtl')
                                    ->label('Informasi Tambahan RTl'),
                            ])
                    ])
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        Laporan::updateOrCreate(
            ['id' => 1],
            $data
        );

        Notification::make()
            ->title('Berhasil Disimpan')
            ->success()
            ->send();
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Changes')
                ->action('submit')
                ->color('primary'),
        ];
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Changes')
                ->submit('submit'),
        ];
    }
}
