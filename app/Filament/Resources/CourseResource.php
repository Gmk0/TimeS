<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
use App\Models\Professeur;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('professeur_id')
                    ->options(Professeur::all()->pluck('nom', 'id'))
                    ->required(),
                Forms\Components\TextInput::make('intitule')
                    ->required(),
                Forms\Components\Select::make('faculte')
                    ->options([
                        'Theologie' => 'Theologie',
                        'Philosophie' => 'Philosophie',
                        'Droit' => 'Droit',
                        'Economie & Development' => 'Economie & Development',
                        'Communication & Social' => 'Communication & Social',
                        'Sciences Informatique' => 'Sciences Informatique',
                        'Medecine' => 'Medecine',
                        'Sciences politique' => 'Sciences Politique'
                    ])
                    ->required(),
                Forms\Components\Select::make('promotion')
                    ->options([
                        'L0' => 'L0',
                        'L1' => 'L1',
                        'L2' => 'L2',
                        'L3' => 'L3',
                        'M1' => 'M1',
                        'M2' => 'M2',

                    ])
                    ->required(),
                Forms\Components\TextInput::make('heures'),
                Forms\Components\TextInput::make('option'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('professeur.nom'),
                Tables\Columns\TextColumn::make('intitule')
                    ->searchable(),
                Tables\Columns\TextColumn::make('faculte')
                    ->searchable(),
                Tables\Columns\TextColumn::make('promotion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('heures')
                    ->searchable(),
                Tables\Columns\TextColumn::make('option')
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'view' => Pages\ViewCourse::route('/{record}'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
