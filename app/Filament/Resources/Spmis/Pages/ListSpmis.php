<?php

namespace App\Filament\Resources\Spmis\Pages;

use App\Filament\Resources\Spmis\SpmiResource;
use App\Models\Spmi;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\Page;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Schema;

class ListSpmis extends Page
{
    use InteractsWithSchemas;

    protected static string $resource = SpmiResource::class;

    protected static ?string $title = 'SPMI';

    protected string $view = 'filament.resources.spmis.pages.spmi';

    public ?array $data = [];

    public function mount(): void
    {
        $spmi = Spmi::first();

        if ($spmi) {
            $this->form->fill($spmi->toArray());
        }
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make()
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Tentang SPMI')
                            ->schema([
                                RichEditor::make('tentang_spmi')
                                    ->label('Tentang SPMI')
                                    ->required(),
                            ]),
                        Tab::make('Monev')
                            ->schema([
                                RichEditor::make('deskripsi_monev')
                                    ->label('Deskripsi Monev')
                                    ->required(),
                                Repeater::make('ruang_lingkup_monev')
                                    ->label('Ruang Lingkup Monev')
                                    ->schema([
                                        TextInput::make('nama_ruang_lingkup')
                                            ->label('Nama Ruang Lingkup')
                                            ->required(),
                                        RichEditor::make('deskripsi_ruang_lingkup')
                                            ->label('Deskripsi Ruang Lingkup')
                                            ->required()
                                    ])->addActionLabel('Tambah Ruang Lingkup'),
                                RichEditor::make('output')
                            ]),
                        Tab::make('AMI')
                            ->schema([
                                RichEditor::make('deskripsi_ami')
                                    ->label('Deskripsi AMI')
                                    ->required(),
                                    Grid::make()
                                    ->schema([
                                        Repeater::make('tujuan_ami')
                                            ->label('Tujuan AMI')
                                            ->schema([
                                                TextInput::make('nomor')
                                                ->required(),
                                                Textarea::make('deskripsi')
                                                ->required()
                                            ]),
                                        Repeater::make('pelaksanaan_ami')
                                            ->label('Pelaksanaan AMI ')
                                            ->schema([
                                                TextInput::make('tahap')
                                                ->helperText('Harap isi dengan angka')
                                                ->required(),
                                                Textarea::make('aktifitas')
                                                ->required(),
                                                TextInput::make('keterangan')
                                                ->required()
                                            ])
                                            ->addActionLabel('Tambah Pelaksanaan AMI')
                                    ])
                            ]),
                        Tab::make('Dokumen SPMI')
                            ->schema([
                                Repeater::make('dokumen_spmi')
                                    ->schema([
                                        TextInput::make('nama_dokumen')
                                            ->label('Nama Dokumen')
                                            ->required(),
                                        FileUpload::make('file')
                                            ->label('Dokumen SPMI')
                                            ->helperText('Maksimal ukuran file 2 MB')
                                            ->required()
                                            ->maxFiles(2048)
                                            ->disk('public')
                                            ->directory('dokumen_spmi')
                                            ->visibility('public')
                                    ])->addActionLabel('Tambah Dokummen SPMI')
                            ])
                    ])
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        Spmi::updateOrCreate(
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
