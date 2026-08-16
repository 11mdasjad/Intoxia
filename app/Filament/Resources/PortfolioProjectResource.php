<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioProjectResource\Pages;
use App\Models\PortfolioCategory;
use App\Models\PortfolioProject;
use App\Models\Technology;
use Filament\Forms;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;

class PortfolioProjectResource extends Resource
{
    protected static ?string $model = PortfolioProject::class;
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-briefcase';
    protected static string | \UnitEnum | null $navigationGroup = 'Content';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel = 'Portfolio';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Schemas\Components\Tabs::make('Project')->tabs([
                Schemas\Components\Tabs\Tab::make('General')->schema([
                    Forms\Components\TextInput::make('title')->required()->maxLength(255),
                    Forms\Components\TextInput::make('slug')->disabled()->dehydrated(),
                    Forms\Components\TextInput::make('client')->maxLength(255),
                    Forms\Components\Select::make('portfolio_category_id')
                        ->label('Category')
                        ->options(PortfolioCategory::all()->pluck('name', 'id'))
                        ->searchable(),
                    Forms\Components\Textarea::make('short_description')->maxLength(500)->rows(2)->columnSpanFull(),
                    Forms\Components\RichEditor::make('description')->columnSpanFull(),
                    Forms\Components\Select::make('technologies')
                        ->multiple()
                        ->relationship('technologies', 'name')
                        ->searchable()
                        ->preload()
                        ->columnSpanFull(),
                    Forms\Components\TextInput::make('website_url')->url(),
                    Forms\Components\Toggle::make('is_featured'),
                    Forms\Components\Toggle::make('is_published')->default(true),
                    Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
                ])->columns(2),

                Schemas\Components\Tabs\Tab::make('Images')->schema([
                    Forms\Components\FileUpload::make('image')->image()->directory('portfolio')->maxSize(2048),
                    Forms\Components\FileUpload::make('hero_image')->image()->directory('portfolio')->maxSize(4096),
                ]),

                Schemas\Components\Tabs\Tab::make('SEO')->schema([
                    Forms\Components\TextInput::make('seo_title')->maxLength(70),
                    Forms\Components\Textarea::make('seo_description')->maxLength(160)->rows(2),
                    Forms\Components\FileUpload::make('og_image')->image()->directory('seo')->maxSize(2048),
                ]),
            ])->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('category.name')->badge(),
                Tables\Columns\TextColumn::make('client'),
                Tables\Columns\IconColumn::make('is_featured')->boolean(),
                Tables\Columns\IconColumn::make('is_published')->boolean(),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([Actions\BulkActionGroup::make([Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortfolioProjects::route('/'),
            'create' => Pages\CreatePortfolioProject::route('/create'),
            'edit' => Pages\EditPortfolioProject::route('/{record}/edit'),
        ];
    }
}
