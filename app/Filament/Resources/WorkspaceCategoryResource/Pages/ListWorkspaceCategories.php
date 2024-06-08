<?php

namespace App\Filament\Resources\WorkspaceCategoryResource\Pages;

use App\Filament\Resources\WorkspaceCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkspaceCategories extends ListRecords
{
    protected static string $resource = WorkspaceCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
