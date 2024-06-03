<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkspaceResource\Pages;
use App\Filament\Resources\WorkspaceResource\RelationManagers;
use App\Models\Workspace;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class WorkspaceResource extends Resource
{
    protected static ?string $model = Workspace::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $navigationGroup = 'Workspace Manager';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('maps')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('rating_avg')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('rating_count')
                    ->required()
                    ->numeric(),
                SpatieMediaLibraryFileUpload::make(Workspace::MEDIA_COLLECTION)
                    ->collection(Workspace::MEDIA_COLLECTION)
                    ->multiple()
                    ->maxFiles(5)
                    ->downloadable()
                    ->columnSpanFull()
                    ->reorderable(),
                CheckboxList::make('facilities')
                    ->relationship(titleAttribute: 'name')
                    ->bulkToggleable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->prefix('Rp')
                    ->sortable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rating_avg')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rating_count')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWorkspaces::route('/'),
            'create' => Pages\CreateWorkspace::route('/create'),
            'edit' => Pages\EditWorkspace::route('/{record}/edit'),
        ];
    }
}
