<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfesseurResource\Pages;
use App\Filament\Resources\ProfesseurResource\RelationManagers;
use App\Models\Professeur;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfesseurResource extends Resource
{
    protected static ?string $model = Professeur::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')
                    ->required(),
                Forms\Components\TextInput::make('prenom')
                    ->required(),
                Forms\Components\TextInput::make('postnom')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\TextInput::make('fonction')
                    ->required(),
                Forms\Components\TextInput::make('titre')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->directory('images')
                    ->preserveFilenames()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('prenom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fonction')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListProfesseurs::route('/'),
            'create' => Pages\CreateProfesseur::route('/create'),
            'view' => Pages\ViewProfesseur::route('/{record}'),
            'edit' => Pages\EditProfesseur::route('/{record}/edit'),
        ];
    }
}
