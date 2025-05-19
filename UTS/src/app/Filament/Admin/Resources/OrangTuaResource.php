<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\OrangTuaResource\Pages;
use App\Filament\Admin\Resources\OrangTuaResource\RelationManagers;
use App\Models\OrangTua;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrangTuaResource extends Resource
{
    protected static ?string $model = OrangTua::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function getPluralModelLabel(): string
    {
        return 'Data Orang Tua';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_ayah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_ibu')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_hp')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('pekerjaan_ayah')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('pekerjaan_ibu')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_ayah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_ibu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_hp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pekerjaan_ayah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pekerjaan_ibu')
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
            'index' => Pages\ListOrangTuas::route('/'),
            'create' => Pages\CreateOrangTua::route('/create'),
            'edit' => Pages\EditOrangTua::route('/{record}/edit'),
        ];
    }
}
