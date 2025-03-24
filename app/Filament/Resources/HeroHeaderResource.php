<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\HeroHeader;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HeroHeaderResource\Pages;
use App\Filament\Resources\HeroHeaderResource\RelationManagers;

class HeroHeaderResource extends Resource
{
    protected static ?string $model = HeroHeader::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('title')
                    ->label('Title'),
                TextInput::make('float_text')
                    ->label('Floating Text'),
                RichEditor::make('description')
                    ->label('Description')->columnSpanFull(),
                Repeater::make('languages')
                    ->label('Languages')
                    ->schema([
                        TextInput::make('language_text')
                            ->label('Language Text'),
                        TextInput::make('language_link')
                            ->prefix('https://')
                            ->label('Language Link'),
                        TextInput::make('custom_css')
                            ->label('Custom CSS'),
                        FileUpload::make('language_icon')
                            ->label('Language Icon'),
                    ])->columns(3)->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('title'),
                TextColumn::make('float_text')
                    ->label('Floating Text'),
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
            'index' => Pages\ListHeroHeaders::route('/'),
            'create' => Pages\CreateHeroHeader::route('/create'),
            'edit' => Pages\EditHeroHeader::route('/{record}/edit'),
        ];
    }
}
