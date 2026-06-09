<?php

namespace App\Filament\Resources\Tentangs\Pages;

use App\Filament\Resources\Tentangs\TentangResource;
use App\Models\SiteSettings;
use App\Models\Tentang;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Schema;
use Storage;

class ListTentangs extends Page
{
    use InteractsWithSchemas;
    protected static string $resource = TentangResource::class;

    protected static ?string $title = 'Tentang';

    protected string $view = 'filament.resources.tentang.pages.tentang';

    public ?array $data = [];

    public function mount(): void
    {
        $tentang = Tentang::first();

        if ($tentang) {
            $this->form->fill($tentang->toArray());
        }
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Isi Halaman')
                    ->schema([
                        TextInput::make('akreditasi_unggul')
                            ->label('Total Akreditasi Unggul')
                            ->numeric()
                            ->nullable(),
                        TextInput::make('auditor_internal')
                            ->label('Auditor Internal')
                            ->numeric()
                            ->required(),
                        FileUpload::make('gambar_1')
                            ->label('Gambar 1')
                            ->nullable()
                            ->image()
                            ->acceptedFileTypes(['image/jpeg', 'image/png'])
                            ->helperText('Format: JPG, PNG, JPEG. Maks: 2MB.')
                            ->maxSize(2048)
                            ->directory('settings')
                            ->disk('private')
                            ->visibility('private')
                            ->saveUploadedFileUsing(function ($file, $get, $record) {

                                // nama file
                                $filename = uniqid() . '.' . $file->getClientOriginalExtension();

                                // path private
                                $privatePath = 'gambar_tentang/' . $filename;

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
                            }),
                        FileUpload::make('gambar_2')
                            ->label('Gambar 2')
                            ->nullable()
                            ->image()
                            ->acceptedFileTypes(['image/jpeg', 'image/png'])
                            ->helperText('Format: JPG, PNG, JPEG. Maks: 2MB.')
                            ->maxSize(2048)
                            ->directory('settings')
                            ->disk('private')
                            ->visibility('private')
                            ->saveUploadedFileUsing(function ($file, $get, $record) {

                                // nama file
                                $filename = uniqid() . '.' . $file->getClientOriginalExtension();

                                // path private
                                $privatePath = 'gambar_tentang/' . $filename;

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
                            }),
                        RichEditor::make('page_explanation')
                            ->label('Penjelasan Halaman')
                            ->required(),
                    ]),
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        Tentang::updateOrCreate(
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
