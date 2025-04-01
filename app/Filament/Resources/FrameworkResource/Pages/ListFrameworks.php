<?php

namespace App\Filament\Resources\FrameworkResource\Pages;

use App\Filament\Resources\FrameworkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFrameworks extends ListRecords
{
    protected static string $resource = FrameworkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
