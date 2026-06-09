<?php

namespace App\Filament\Resources\StrukturOrganisasis\Pages;

use App\Filament\Resources\StrukturOrganisasis\StrukturOrganisasiResource;
use App\Models\StrukturOrganisasi;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Schema;
use Storage;

class ManageStrukturOrganisasis extends Page
{
    use InteractsWithSchemas;
    protected static string $resource = StrukturOrganisasiResource::class;

    protected static ?string $title = 'Struktur Organisasi';

    protected string $view = 'filament.pages.struktur-organisasi';

    public ?array $data = [];

    public function mount(): void
    {
        $visiMisi = StrukturOrganisasi::first();

        if ($visiMisi) {
            $this->form->fill($visiMisi->toArray());
        }
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Gambar')
                    ->schema([
                        FileUpload::make('gambar')
                            ->label('Gambar Struktur Organisasi')
                            ->image()
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
                            ->helperText('Format: JPG, PNG, JPEG. Maks: 2MB.')
                            ->directory('struktur_organisasi')
                            ->disk('private')
                            ->visibility('private')
                            ->saveUploadedFileUsing(function ($file, $get, $record) {

                                // nama file
                                $filename = uniqid() . '.' . $file->getClientOriginalExtension();

                                // path private
                                $privatePath = 'struktur_organisasi/' . $filename;

                                // simpan ke private
                                Storage::disk('private')->put(
                                    $privatePath,
                                    file_get_contents($file->getRealPath())
                                );

                                // copy ke public
                                Storage::disk('public')->put(
                                    $privatePath,
                                    file_get_contents($file->getRealPath())
                                );

                                // nilai yang disimpan ke database
                                return $privatePath;
                            })
                            ->required(),
                    ])
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        StrukturOrganisasi::updateOrCreate(
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
