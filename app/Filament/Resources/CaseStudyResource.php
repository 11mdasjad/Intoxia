<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CaseStudyResource\Pages;
use App\Models\CaseStudy;
use App\Models\PortfolioProject;
use Filament\Forms;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;

class CaseStudyResource extends Resource
{
    protected static ?string $model = CaseStudy::class;
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-presentation-chart-line';
    protected static string | \UnitEnum | null $navigationGroup = 'Content';
    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Schemas\Components\Tabs::make('Case Study')->tabs([
                Schemas\Components\Tabs\Tab::make('Overview')->schema([
                    Forms\Components\TextInput::make('title')->required()->maxLength(255)->columnSpanFull(),
                    Forms\Components\TextInput::make('slug')->disabled()->dehydrated(),
                    Forms\Components\Select::make('portfolio_project_id')
                        ->label('Linked Portfolio Project')
                        ->relationship('project', 'title')
                        ->searchable(),
                    Forms\Components\TextInput::make('client')->maxLength(255),
                    Forms\Components\TextInput::make('industry')->maxLength(255),
                    Forms\Components\TextInput::make('duration')->maxLength(100),
                    Forms\Components\Toggle::make('is_published')->default(true),
                ])->columns(2),

                Schemas\Components\Tabs\Tab::make('Deep Dive')->schema([
                    Forms\Components\Textarea::make('challenge')->rows(3)->label('The Challenge'),
                    Forms\Components\Textarea::make('business_context')->rows(3)->label('Business Context'),
                    Forms\Components\RichEditor::make('solution')->label('The Solution')->columnSpanFull(),
                    Forms\Components\RichEditor::make('design_approach')->label('Design & UX Approach')->columnSpanFull(),
                    Forms\Components\RichEditor::make('architecture')->label('Architecture & Tech Choices')->columnSpanFull(),
                    Forms\Components\TagsInput::make('technologies_used'),
                    Forms\Components\TagsInput::make('results')->helperText('Key business & technical metrics achieved'),
                    Forms\Components\Textarea::make('lessons_learned')->rows(2),
                ]),

                Schemas\Components\Tabs\Tab::make('Client Feedback')->schema([
                    Forms\Components\Textarea::make('testimonial_quote')->rows(3),
                    Forms\Components\TextInput::make('testimonial_name'),
                    Forms\Components\TextInput::make('testimonial_role'),
                ])->columns(2),

                Schemas\Components\Tabs\Tab::make('Media & SEO')->schema([
                    Forms\Components\FileUpload::make('hero_image')->image()->directory('casestudies')->maxSize(4096),
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
                Tables\Columns\TextColumn::make('title')->searchable()->sortable()->limit(40),
                Tables\Columns\TextColumn::make('client')->searchable(),
                Tables\Columns\TextColumn::make('industry')->badge(),
                Tables\Columns\IconColumn::make('is_published')->boolean(),
                Tables\Columns\TextColumn::make('created_at')->dateTime('M j, Y')->sortable(),
            ])
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([Actions\BulkActionGroup::make([Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCaseStudies::route('/'),
            'create' => Pages\CreateCaseStudy::route('/create'),
            'edit' => Pages\EditCaseStudy::route('/{record}/edit'),
        ];
    }
}
