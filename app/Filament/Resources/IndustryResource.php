<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IndustryResource\Pages;
use App\Models\Industry;
use Filament\Forms;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;

class IndustryResource extends Resource
{
    protected static ?string $model = Industry::class;
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-building-office-2';
    protected static string | \UnitEnum | null $navigationGroup = 'Content';
    protected static ?int $navigationSort = 5;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Schemas\Components\Tabs::make('Industry')->tabs([
                Schemas\Components\Tabs\Tab::make('Details')->schema([
                    Forms\Components\TextInput::make('name')->required()->maxLength(255),
                    Forms\Components\TextInput::make('slug')->disabled()->dehydrated(),
                    Forms\Components\TextInput::make('icon')->maxLength(50)->helperText('Lucide icon name'),
                    Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
                    Forms\Components\Textarea::make('short_description')->maxLength(500)->rows(2)->columnSpanFull(),
                    Forms\Components\Textarea::make('problem')->label('Industry Problem / Challenge')->rows(3),
                    Forms\Components\Textarea::make('solution')->label('Intoxia Solution')->rows(3),
                    Forms\Components\TagsInput::make('technologies')->label('Relevant Technologies'),
                    Forms\Components\TagsInput::make('potential_products')->label('Potential Products / Solutions'),
                    Forms\Components\Toggle::make('is_published')->default(true),
                ])->columns(2),

                Schemas\Components\Tabs\Tab::make('Media & SEO')->schema([
                    Forms\Components\FileUpload::make('image')->image()->directory('industries')->maxSize(2048),
                    Forms\Components\TextInput::make('seo_title')->maxLength(70),
                    Forms\Components\Textarea::make('seo_description')->maxLength(160)->rows(2),
                ]),
            ])->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('icon')->badge(),
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
            'index' => Pages\ListIndustries::route('/'),
            'create' => Pages\CreateIndustry::route('/create'),
            'edit' => Pages\EditIndustry::route('/{record}/edit'),
        ];
    }
}
