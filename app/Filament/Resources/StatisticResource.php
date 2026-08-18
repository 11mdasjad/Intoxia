<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatisticResource\Pages;
use App\Models\Statistic;
use Filament\Forms;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;

class StatisticResource extends Resource
{
    protected static ?string $model = Statistic::class;
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-arrow-trending-up';
    protected static string | \UnitEnum | null $navigationGroup = 'Company';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationLabel = 'Company Stats';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Forms\Components\TextInput::make('label')->required()->maxLength(255)->placeholder('e.g. Projects Delivered'),
            Forms\Components\TextInput::make('value')->required()->maxLength(50)->placeholder('e.g. 50'),
            Forms\Components\TextInput::make('suffix')->maxLength(10)->placeholder('e.g. + or %'),
            Forms\Components\TextInput::make('icon')->maxLength(50)->placeholder('e.g. check-circle'),
            Forms\Components\Toggle::make('is_published')->default(true),
            Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('label')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('value')->formatStateUsing(fn ($record) => $record->value . $record->suffix),
                Tables\Columns\IconColumn::make('is_published')->boolean(),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStatistics::route('/'),
            'create' => Pages\CreateStatistic::route('/create'),
            'edit' => Pages\EditStatistic::route('/{record}/edit'),
        ];
    }
}
