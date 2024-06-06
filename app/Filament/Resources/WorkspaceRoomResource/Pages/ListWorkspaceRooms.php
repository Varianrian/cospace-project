<?php

namespace App\Filament\Resources\WorkspaceRoomResource\Pages;

use App\Filament\Resources\WorkspaceRoomResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkspaceRooms extends ListRecords
{
    protected static string $resource = WorkspaceRoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
