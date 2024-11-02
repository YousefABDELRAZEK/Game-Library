<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GameResource\Pages;
use App\Models\Game;
use Filament\Forms\Form;  // Changed from Filament\Form
use Filament\Resources\Resource;
use Filament\Tables\Table;  // Changed from Filament\Table
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class GameResource extends Resource
{
    protected static ?string $model = Game::class;
    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $navigationLabel = 'Games';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Game Name')
                    ->required(),
                TextInput::make('genre')
                    ->label('Genre')
                    ->required(),
                FileUpload::make('image')
                    ->label('Game Image')
                    ->directory('games/images')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Game Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('genre')
                    ->label('Genre')
                    ->sortable(),
                ImageColumn::make('image')
                    ->label('Game Image')
                    ->sortable(),
            ])
            ->filters([
                // Your filters here
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGames::route('/'),
            'create' => Pages\CreateGame::route('/create'),
            'edit' => Pages\EditGame::route('/{record}/edit'),
        ];
    }
}
