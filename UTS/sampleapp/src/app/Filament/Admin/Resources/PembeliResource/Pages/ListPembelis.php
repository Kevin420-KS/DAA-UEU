<?php

namespace App\Filament\Admin\Resources\PembeliResource\Pages;

use App\Filament\Admin\Resources\PembeliResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPembelis extends ListRecords
{
    protected static string $resource = PembeliResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
