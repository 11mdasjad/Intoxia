<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteSettingResource\Pages;
use App\Models\SiteSetting;
use Filament\Forms;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;

class SiteSettingResource extends Resource
{
    protected static ?string $model = SiteSetting::class;
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static string | \UnitEnum | null $navigationGroup = 'Settings';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Site Settings';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Forms\Components\TextInput::make('key')->required()->disabled(),
            Forms\Components\Select::make('group')
                ->options([
                    'general' => 'General',
                    'contact' => 'Contact Details',
                    'social' => 'Social Links',
                    'seo' => 'SEO Defaults',
                    'analytics' => 'Analytics',
                    'footer' => 'Footer',
                ])->required(),
            Forms\Components\Textarea::make('value')->rows(3)->columnSpanFull(),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('group')->badge()->sortable(),
                Tables\Columns\TextColumn::make('key')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('value')->limit(50),
            ])
            ->defaultSort('group')
            ->filters([
                Tables\Filters\SelectFilter::make('group')
                    ->options([
                        'general' => 'General',
                        'contact' => 'Contact',
                        'social' => 'Social',
                        'seo' => 'SEO',
                        'analytics' => 'Analytics',
                    ]),
            ])
            ->actions([
                Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiteSettings::route('/'),
            'edit' => Pages\EditSiteSetting::route('/{record}/edit'),
        ];
    }
}
