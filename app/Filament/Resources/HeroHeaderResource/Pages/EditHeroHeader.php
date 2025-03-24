<?php

namespace App\Filament\Resources\HeroHeaderResource\Pages;

use App\Filament\Resources\HeroHeaderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeroHeader extends EditRecord
{
    protected static string $resource = HeroHeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
