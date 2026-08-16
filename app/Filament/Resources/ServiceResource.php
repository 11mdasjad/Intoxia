<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use App\Models\ServiceCategory;
use Filament\Forms;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-wrench-screwdriver';
    protected static string | \UnitEnum | null $navigationGroup = 'Content';
    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Schemas\Components\Tabs::make('Service')->tabs([
                Schemas\Components\Tabs\Tab::make('General')->schema([
                    Forms\Components\TextInput::make('name')->required()->maxLength(255),
                    Forms\Components\TextInput::make('slug')->disabled()->dehydrated(),
                    Forms\Components\TextInput::make('icon')->maxLength(50)->helperText('Lucide icon name (e.g. globe, code, brain)'),
                    Forms\Components\Select::make('service_category_id')
                        ->label('Category')
                        ->options(ServiceCategory::all()->pluck('name', 'id'))
                        ->searchable(),
                    Forms\Components\Textarea::make('short_description')->maxLength(500)->rows(2),
                    Forms\Components\RichEditor::make('description')->columnSpanFull(),
                    Forms\Components\Toggle::make('is_featured'),
                    Forms\Components\Toggle::make('is_published')->default(true),
                    Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
                ])->columns(2),

                Schemas\Components\Tabs\Tab::make('Details')->schema([
                    Forms\Components\TagsInput::make('benefits')->helperText('Key benefits of this service'),
                    Forms\Components\TagsInput::make('technologies')->helperText('Technologies used'),
                    Forms\Components\TagsInput::make('deliverables')->helperText('What the client receives'),
                    Forms\Components\TextInput::make('cta_text')->maxLength(100),
                    Forms\Components\TextInput::make('cta_url')->url()->maxLength(255),
                ]),

                Schemas\Components\Tabs\Tab::make('Images')->schema([
                    Forms\Components\FileUpload::make('image')
                        ->image()
                        ->directory('services')
                        ->maxSize(2048),
                    Forms\Components\FileUpload::make('hero_image')
                        ->image()
                        ->directory('services')
                        ->maxSize(4096),
                ]),

                Schemas\Components\Tabs\Tab::make('SEO')->schema([
                    Forms\Components\TextInput::make('seo_title')->maxLength(70),
                    Forms\Components\Textarea::make('seo_description')->maxLength(160)->rows(2),
                    Forms\Components\FileUpload::make('og_image')
                        ->image()
                        ->directory('seo')
                        ->maxSize(2048),
                ]),
            ])->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('category.name')->badge()->sortable(),
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
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
