<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogPostResource\Pages;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use Filament\Forms;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-newspaper';
    protected static string | \UnitEnum | null $navigationGroup = 'Content';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationLabel = 'Insights & Blog';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Schemas\Components\Tabs::make('Blog Post')->tabs([
                Schemas\Components\Tabs\Tab::make('Content')->schema([
                    Forms\Components\TextInput::make('title')->required()->maxLength(255),
                    Forms\Components\TextInput::make('slug')->disabled()->dehydrated(),
                    Forms\Components\Select::make('blog_category_id')
                        ->label('Category')
                        ->options(BlogCategory::all()->pluck('name', 'id'))
                        ->searchable(),
                    Forms\Components\Select::make('author_id')
                        ->relationship('author', 'name')
                        ->searchable()
                        ->preload(),
                    Forms\Components\Select::make('tags')
                        ->multiple()
                        ->relationship('tags', 'name')
                        ->preload(),
                    Forms\Components\TextInput::make('reading_time')->numeric()->suffix('mins'),
                    Forms\Components\Textarea::make('excerpt')->maxLength(500)->rows(2)->columnSpanFull(),
                    Forms\Components\RichEditor::make('body')->columnSpanFull()->required(),
                    Forms\Components\Select::make('status')
                        ->options([
                            'draft' => 'Draft',
                            'published' => 'Published',
                            'scheduled' => 'Scheduled',
                        ])->default('draft')->required(),
                    Forms\Components\DateTimePicker::make('published_at')->default(now()),
                    Forms\Components\Toggle::make('is_featured'),
                ])->columns(2),

                Schemas\Components\Tabs\Tab::make('Media')->schema([
                    Forms\Components\FileUpload::make('featured_image')->image()->directory('blog')->maxSize(3072),
                ]),

                Schemas\Components\Tabs\Tab::make('SEO & Social')->schema([
                    Forms\Components\TextInput::make('seo_title')->maxLength(70),
                    Forms\Components\Textarea::make('seo_description')->maxLength(160)->rows(2),
                    Forms\Components\FileUpload::make('og_image')->image()->directory('seo')->maxSize(2048),
                    Forms\Components\TextInput::make('canonical_url')->url(),
                ]),
            ])->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable()->limit(40),
                Tables\Columns\TextColumn::make('category.name')->badge(),
                Tables\Columns\TextColumn::make('status')->badge()->color(fn (string $state): string => match ($state) {
                    'published' => 'success',
                    'scheduled' => 'warning',
                    'draft' => 'gray',
                }),
                Tables\Columns\TextColumn::make('published_at')->dateTime('M j, Y')->sortable(),
                Tables\Columns\IconColumn::make('is_featured')->boolean(),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([Actions\BulkActionGroup::make([Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPost::route('/create'),
            'edit' => Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}
