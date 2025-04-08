<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonalInformationResource\Pages;
use App\Filament\Resources\PersonalInformationResource\RelationManagers;
use App\Models\PersonalInformation;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PersonalInformationResource extends Resource
{
    protected static ?string $model = PersonalInformation::class;
    protected static ?string $navigationGroup = 'Landing Pages';
    protected static ?int $navigationSort = 5;
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('info')
                    ->label('Information Title'),
                FileUpload::make('profile')
                    ->label('Profile')
                    ->disk('public')
                    ->directory('uploaded_image')
                    ->imagePreviewHeight(100)
                    ->image()
                    ->columnSpan(1)
                    ->maxSize(2048),
                Repeater::make('info_data')
                    ->schema([
                        TextInput::make('heading')
                            ->label('Heading')
                            ->columnSpan(1),
                            RichEditor::make('sub_heading')
                            ->label('Sub Heading')
                            ->columnSpan(1),
                        RichEditor::make('description')
                            ->label('Description')
                            ->columnSpanFull(),
                        FileUpload::make('resume')
                            ->label('Resume')
                            ->downloadable()
                            ->disk('public')
                            ->directory('uploaded_file')
                            ->columnSpan(1),
                        FileUpload::make('cv')
                            ->label('CV')
                            ->downloadable()
                            ->disk('public')
                            ->directory('uploaded_file')
                            ->columnSpan(1),
                    ])
                    ->columnSpanFull()
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('info')
                    ->label('Information Title'),
                ImageColumn::make('')
                    ->label('')
                    ->circular()
                    ->stacked()
                    ->limit(3)
                    ->limitedRemainingText(),
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
            'index' => Pages\ListPersonalInformation::route('/'),
            'create' => Pages\CreatePersonalInformation::route('/create'),
            'edit' => Pages\EditPersonalInformation::route('/{record}/edit'),
        ];
    }
}
