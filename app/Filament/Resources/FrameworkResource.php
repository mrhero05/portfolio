<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Framework;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FrameworkResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FrameworkResource\RelationManagers;

class FrameworkResource extends Resource
{
    protected static ?string $model = Framework::class;
    protected static ?string $navigationGroup = 'Landing Pages';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('title')
                    ->label('Title')
                    ->columnSpan(1),
                TextInput::make('order_weight')
                    ->label('Order')
                    ->columnSpan(1)
                    ->numeric(),
                FileUpload::make('frameworks_img')
                    ->label('Frameworks Image')
                    ->disk('public')
                    ->directory('uploaded_image')
                    ->imagePreviewHeight(100)
                    ->image()
                    ->columnSpan(1)
                    ->maxSize(2048),
                TextInput::make('cta')
                    ->label('External Link')
                    ->columnSpan(1),
                Repeater::make('custom_css')
                    ->schema([
                        TextInput::make('name')
                            ->label('Code')
                            ->columnSpanFull(),
                    ])
                    ->label('Custom CSS')
                    ->collapsible()
                    ->grid()
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('order_weight')
            ->columns([
                //
                TextColumn::make('title')
                    ->label('Title'),
                ImageColumn::make('frameworks_img')
                    ->label('Framework Logo')
                    ->limitedRemainingText(),
                TextColumn::make('cta')
                    ->label('External Link'),
                TextColumn::make('order_weight')
                    ->label('Order'),
            ])
            ->defaultSort('order_weight', 'asc')
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
            'index' => Pages\ListFrameworks::route('/'),
            'create' => Pages\CreateFramework::route('/create'),
            'edit' => Pages\EditFramework::route('/{record}/edit'),
        ];
    }
}
