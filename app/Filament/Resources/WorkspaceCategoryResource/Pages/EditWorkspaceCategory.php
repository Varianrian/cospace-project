<?php

namespace App\Filament\Resources\WorkspaceCategoryResource\Pages;

use App\Filament\Resources\WorkspaceCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkspaceCategory extends EditRecord
{
    protected static string $resource = WorkspaceCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
