<?php

namespace App\Filament\Resources\WorkspaceRoomResource\Pages;

use App\Filament\Resources\WorkspaceRoomResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkspaceRoom extends EditRecord
{
    protected static string $resource = WorkspaceRoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
