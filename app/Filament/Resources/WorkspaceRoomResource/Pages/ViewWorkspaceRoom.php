<?php

namespace App\Filament\Resources\WorkspaceRoomResource\Pages;

use App\Filament\Resources\WorkspaceRoomResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewWorkspaceRoom extends ViewRecord
{
    protected static string $resource = WorkspaceRoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
