<?php

namespace App\Filament\Resources\SiteSettings\Pages;

use App\Filament\Resources\SiteSettings\SiteSettingsResource;
use App\Models\SiteSettings;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Schema;
use Storage;

class ListSiteSettings extends Page
{
    use InteractsWithSchemas;
    protected static string $resource = SiteSettingsResource::class;

    protected static ?string $title = 'Manage Site Settings';

    protected string $view = 'filament.resources.site-settings.pages.list-site-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $settings = SiteSettings::all()
            ->pluck('setting_value', 'setting_key')
            ->toArray();

        $jsonFields = [
            'faqs',
            'layanan_spmi',
            'status_akreditasi_program_studi',
            'mitra_akreditasi',
        ];

        foreach ($settings as $key => $val) {
            if (
                is_string($val)
                && (
                    in_array($key, $jsonFields)
                    || str_ends_with($key, '_misi')
                )
            ) {
                $settings[$key] = json_decode($val, true) ?? [];
            }
        }

        $this->form->fill($settings);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Settings')
                    ->tabs([
                        Tab::make('General')
                            ->schema([
                                TextInput::make('site_name')
                                    ->required(),
                                FileUpload::make('logo_url')
                                    ->label('Logo')
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
                                        $privatePath = 'logo_url/' . $filename;

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
                                Textarea::make('site_description')
                                    ->rows(3),
                            ]),
                        Tab::make('Facts')
                            ->schema([
                                TextInput::make('total_personil_lpm')->label('Total Personil LPM')->numeric()->nullable(),
                                TextInput::make('total_program_studi')->numeric()->nullable(),
                                TextInput::make('akreditasi_unggul')->numeric()->nullable(),
                                TextInput::make('akreditasi_baik_sekali')->numeric()->nullable(),
                                TextInput::make('akreditasi_baik')->numeric()->nullable(),
                            ]),
                        Tab::make('Layanan SPMI')
                            ->schema([
                                Repeater::make('layanan_spmi')
                                    ->label('Layanan SPMI')
                                    ->schema([
                                        TextInput::make('nama_layanan')->required(),
                                        Textarea::make('deskripsi_layanan')->required(),
                                    ])
                            ]),
                        Tab::make('Status Akreditasi')
                            ->schema([
                                Repeater::make('status_akreditasi_program_studi')
                                    ->schema([
                                        FileUpload::make('logo_akreditasi')
                                            ->image()
                                            ->maxSize(2048)
                                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
                                            ->helperText('Format: JPG, PNG, JPEG. Maks: 2MB.')
                                            ->disk('private')
                                            ->visibility('private')
                                            ->saveUploadedFileUsing(function ($file, $get, $record) {

                                                // nama file
                                                $filename = uniqid() . '.' . $file->getClientOriginalExtension();

                                                // path private
                                                $privatePath = 'logo_akreditasi/' . $filename;

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
                                            ->nullable(),
                                        TextInput::make('singkatan_akreditasi')
                                            ->required(),
                                        TextInput::make('nama_akreditasi')
                                            ->required(),
                                        TextInput::make('akreditasi_unggul')
                                            ->numeric()
                                            ->nullable(),
                                        TextInput::make('akreditasi_baik_sekali')
                                            ->numeric()
                                            ->nullable(),
                                        TextInput::make('akreditasi_baik')
                                            ->numeric()
                                            ->nullable(),
                                    ])
                            ]),
                        Tab::make('Mitra Akreditasi')
                            ->schema([
                                Repeater::make('mitra_akreditasi')
                                    ->schema([
                                        FileUpload::make('logo_mitra')
                                            ->image()
                                            ->maxSize(2048)
                                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
                                            ->helperText('Format: JPG, PNG, JPEG. Maks: 2MB.')
                                            ->directory('logo_mitra')
                                            ->disk('private')
                                            ->visibility('private')
                                            ->saveUploadedFileUsing(function ($file, $get, $record) {

                                                // nama file
                                                $filename = uniqid() . '.' . $file->getClientOriginalExtension();

                                                // path private
                                                $privatePath = 'logo_mitra/' . $filename;

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
                            ]),
                        Tab::make('Contact')
                            ->schema([
                                TextInput::make('telepon')->label('Telephone')->nullable(),
                                TextInput::make('whatsapp_number')->label('WhatsApp Number (e.g. 628...)')->numeric()->nullable(),
                                TextInput::make('email')->label('Email')->email()->nullable(),
                                Textarea::make('alamat')->label('alamat')->rows(3)->nullable(),
                                TextInput::make('jam_operasional')->label('Jam Operasional')->nullable()
                                    ->helperText('Contoh Pengisian : Senin – Jumat: 08.00 – 16.00 WITA'),
                            ]),
                        Tab::make('Social Media')
                            ->schema([
                                TextInput::make('facebook_url')->label('Link Facebook')->url()->nullable(),
                                TextInput::make('instagram_url')->label('Link Instagram')->url()->nullable(),
                                TextInput::make('twitter_url')->label('Link Twitter / X')->url()->nullable(),
                                TextInput::make('youtube_url')->label('Link Youtube')->url()->nullable(),
                                TextInput::make('tiktok_url')->label('Link Tiktok')->url()->nullable(),
                            ]),
                        Tab::make('Periode')
                            ->schema([
                                TextInput::make('periode')
                                ->helperText('Contoh Pengisian: 2024 - 2029')
                                ->required()
                            ])

                    ])->columnSpan('full'),
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $value = json_encode($value);
            }

            SiteSettings::updateOrCreate(
                ['setting_key' => $key],
                ['setting_value' => $value]
            );
        }

        Notification::make()
            ->title('Settings saved successfully')
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
