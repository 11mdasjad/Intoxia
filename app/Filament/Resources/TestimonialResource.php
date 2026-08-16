<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static string | \UnitEnum | null $navigationGroup = 'Content';
    protected static ?int $navigationSort = 7;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Forms\Components\TextInput::make('name')->required()->maxLength(255),
            Forms\Components\TextInput::make('role')->maxLength(255)->placeholder('e.g. Founder & CEO'),
            Forms\Components\TextInput::make('company')->maxLength(255),
            Forms\Components\TextInput::make('project')->maxLength(255)->placeholder('e.g. AI Workflow Platform'),
            Forms\Components\Select::make('rating')
                ->options([
                    5 => '5 Stars',
                    4 => '4 Stars',
                    3 => '3 Stars',
                ])->default(5)->required(),
            Forms\Components\FileUpload::make('photo')->image()->directory('testimonials')->avatar(),
            Forms\Components\Textarea::make('testimonial')->required()->rows(4)->columnSpanFull(),
            Forms\Components\Toggle::make('is_published')->default(true),
            Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')->circular(),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('company')->searchable(),
                Tables\Columns\TextColumn::make('rating')->badge()->color('warning'),
                Tables\Columns\IconColumn::make('is_published')->boolean(),
            ])
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
