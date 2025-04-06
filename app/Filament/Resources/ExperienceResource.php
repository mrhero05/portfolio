<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Experience;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ExperienceResource\Pages;
use App\Filament\Resources\ExperienceResource\RelationManagers;
use Filament\Forms\Components\Grid;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;
    protected static ?string $navigationGroup = 'Landing Pages';
    protected static ?string $navigationIcon = 'heroicon-o-clock';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Grid::make(3)
                ->schema([
                    TextInput::make('position')
                        ->label('Position')
                        ->columnSpan(1),
                    TextInput::make('company')
                        ->label('Company')
                        ->columnSpan(1),
                    TextInput::make('date')
                        ->label('Date')
                        ->columnSpan(1),
                    RichEditor::make('description')
                        ->label('Description')->columnSpanFull(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable()
            ->columns([
                //
                TextColumn::make('position')
                    ->label('Position'),
                TextColumn::make('company')
                    ->label('Company'),
                TextColumn::make('date')
                    ->label('Date'),
                TextColumn::make('description')
                    ->html()->wrap()->lineClamp(2),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
