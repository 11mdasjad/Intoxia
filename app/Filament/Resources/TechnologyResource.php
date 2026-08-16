<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechnologyResource\Pages;
use App\Models\Technology;
use App\Models\TechnologyCategory;
use Filament\Forms;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;

class TechnologyResource extends Resource
{
    protected static ?string $model = Technology::class;
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-cpu-chip';
    protected static string | \UnitEnum | null $navigationGroup = 'Content';
    protected static ?int $navigationSort = 6;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Forms\Components\TextInput::make('name')->required()->maxLength(255),
            Forms\Components\Select::make('technology_category_id')
                ->label('Category')
                ->options(TechnologyCategory::all()->pluck('name', 'id'))
                ->required(),
            Forms\Components\ColorPicker::make('color')->label('Brand / Accent Color'),
            Forms\Components\TextInput::make('icon')->maxLength(50),
            Forms\Components\Toggle::make('is_published')->default(true),
            Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('category.name')->badge()->sortable(),
                Tables\Columns\ColorColumn::make('color'),
                Tables\Columns\IconColumn::make('is_published')->boolean(),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
            ])
            ->defaultSort('sort_order')
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTechnologies::route('/'),
            'create' => Pages\CreateTechnology::route('/create'),
            'edit' => Pages\EditTechnology::route('/{record}/edit'),
        ];
    }
}
