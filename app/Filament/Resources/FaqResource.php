<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Models\Faq;
use Filament\Forms;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static string | \UnitEnum | null $navigationGroup = 'Company';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel = 'FAQs';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Forms\Components\TextInput::make('question')->required()->maxLength(255)->columnSpanFull(),
            Forms\Components\Textarea::make('answer')->required()->rows(4)->columnSpanFull(),
            Forms\Components\Select::make('category')
                ->options([
                    'General' => 'General',
                    'Process' => 'Process',
                    'Pricing' => 'Pricing',
                    'Technical' => 'Technical',
                ])->default('General'),
            Forms\Components\Toggle::make('is_published')->default(true),
            Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('question')->searchable()->sortable()->limit(60),
                Tables\Columns\TextColumn::make('category')->badge(),
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
            'index' => Pages\ListFaqs::route('/'),
            'create' => Pages\CreateFaq::route('/create'),
            'edit' => Pages\EditFaq::route('/{record}/edit'),
        ];
    }
}
