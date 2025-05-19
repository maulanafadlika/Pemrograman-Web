<?php

namespace App\Filament\Admin\Resources\DataMuridResource\Pages;

use App\Filament\Admin\Resources\DataMuridResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataMurids extends ListRecords
{
    protected static string $resource = DataMuridResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
