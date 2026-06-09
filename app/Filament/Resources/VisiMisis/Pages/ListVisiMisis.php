<?php

namespace App\Filament\Resources\VisiMisis\Pages;

use App\Filament\Resources\VisiMisis\VisiMisiResource;
use App\Models\VisiMisi;
use Filament\Actions\Action;
use Filament\Forms\Components\RichEditor;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Schema;

class ListVisiMisis extends Page
{
    use InteractsWithSchemas;
    protected static string $resource = VisiMisiResource::class;

    protected static ?string $title = 'Visi Misi';

    protected string $view = 'filament.pages.visi-misi';

    public ?array $data = [];

    public function mount(): void
    {
        $visiMisi = VisiMisi::first();

        if ($visiMisi) {
            $this->form->fill($visiMisi->toArray());
        }
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Visi')
                ->schema([
                    RichEditor::make('visi')
                    ->required(),
                    RichEditor::make('misi')
                    ->required()
                ])
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        VisiMisi::updateOrCreate(
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
