<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EnquiryResource\Pages;
use App\Models\Enquiry;
use App\Models\User;
use Filament\Forms;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;

class EnquiryResource extends Resource
{
    protected static ?string $model = Enquiry::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-envelope';

    protected static string | \UnitEnum | null $navigationGroup = 'Leads & Inquiries';

    protected static ?int $navigationSort = 1;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', 'new')->count() ?: null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Schemas\Components\Section::make('Contact Information')
                ->schema([
                    Forms\Components\TextInput::make('name')->required()->disabled(),
                    Forms\Components\TextInput::make('email')->email()->required()->disabled(),
                    Forms\Components\TextInput::make('phone')->disabled(),
                    Forms\Components\TextInput::make('company')->disabled(),
                ])->columns(2),

            Schemas\Components\Section::make('Project Details')
                ->schema([
                    Forms\Components\TextInput::make('service')->disabled(),
                    Forms\Components\TextInput::make('budget')->disabled(),
                    Forms\Components\TextInput::make('timeline')->disabled(),
                    Forms\Components\Textarea::make('message')->disabled()->columnSpanFull(),
                ])->columns(3),

            Schemas\Components\Section::make('Management')
                ->schema([
                    Forms\Components\Select::make('status')
                        ->options([
                            'new' => 'New',
                            'contacted' => 'Contacted',
                            'qualified' => 'Qualified',
                            'proposal_sent' => 'Proposal Sent',
                            'won' => 'Won',
                            'lost' => 'Lost',
                        ])
                        ->required(),
                    Forms\Components\Select::make('assigned_to')
                        ->label('Assigned To')
                        ->options(User::all()->pluck('name', 'id'))
                        ->searchable()
                        ->nullable(),
                ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('service')->badge(),
                Tables\Columns\TextColumn::make('budget')->toggleable(),
                Tables\Columns\SelectColumn::make('status')
                    ->options([
                        'new' => 'New',
                        'contacted' => 'Contacted',
                        'qualified' => 'Qualified',
                        'proposal_sent' => 'Proposal Sent',
                        'won' => 'Won',
                        'lost' => 'Lost',
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Received')
                    ->dateTime('M j, Y g:i A')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'new' => 'New',
                        'contacted' => 'Contacted',
                        'qualified' => 'Qualified',
                        'proposal_sent' => 'Proposal Sent',
                        'won' => 'Won',
                        'lost' => 'Lost',
                    ]),
            ])
            ->actions([
                Actions\ViewAction::make(),
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
            'index' => Pages\ListEnquiries::route('/'),
            'view' => Pages\ViewEnquiry::route('/{record}'),
            'edit' => Pages\EditEnquiry::route('/{record}/edit'),
        ];
    }
}
