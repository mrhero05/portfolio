<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Projects;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProjectsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectsResource\RelationManagers;
use Filament\Tables\Columns\ImageColumn;

class ProjectsResource extends Resource
{
    protected static ?string $model = Projects::class;
    protected static ?string $navigationGroup = 'Landing Pages';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('title')
                    ->label('Title'),
                TextInput::make('order_weight')
                    ->label('Order Weight'),
                RichEditor::make('description')
                    ->label('Description')->columnSpanFull(),
                Section::make('Links')
                    ->description('Other Information for Feature Projects.')
                    ->schema([
                        TextInput::make('project_link')
                            ->label('Project Link'),
                        TextInput::make('github_link')
                            ->label('Github Link'),
                        FileUpload::make('project_images')
                            ->label('Project Images')
                            ->disk('public')
                            ->directory('uploaded_image')
                            ->imagePreviewHeight(100)
                            ->multiple()
                            ->image()
                            ->maxSize(2048),
                    ])
                    ->columns(3)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('title')
                    ->label('Title'),
                TextColumn::make('description')
                    ->label('Description')
                    ->html()->wrap()->lineClamp(3),
                ImageColumn::make('project_images')
                ->circular()
                ->stacked()
                ->limit(3)
                ->limitedRemainingText(),
                TextColumn::make('order_weight')
                    ->label('Order')
                    ->sortable(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProjects::route('/create'),
            'edit' => Pages\EditProjects::route('/{record}/edit'),
        ];
    }
}
