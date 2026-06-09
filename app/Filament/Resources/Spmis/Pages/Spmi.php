<?php

namespace App\Filament\Resources\Spmis\Pages;

use App\Filament\Resources\Spmis\SpmiResource;
use Filament\Resources\Pages\Page;

class Spmi extends Page
{
    protected static string $resource = SpmiResource::class;

    protected string $view = 'filament.resources.spmis.pages.spmi';
}
