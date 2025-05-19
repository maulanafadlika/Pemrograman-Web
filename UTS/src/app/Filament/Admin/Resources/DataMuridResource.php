<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DataMuridResource\Pages;
use App\Filament\Admin\Resources\DataMuridResource\RelationManagers;
use App\Models\DataMurid;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataMuridResource extends Resource
{
    protected static ?string $model = DataMurid::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function getPluralModelLabel(): string
    {
        return 'Data Murid';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nis')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nisn')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tempat_tanggal_lahir')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenis_kelamin')
                    ->required(),
                Forms\Components\TextInput::make('agama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kewarganegaraan')
                    ->required(),
                Forms\Components\Textarea::make('alamat')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('kelas_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('orangtua_id')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nis')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nisn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tempat_tanggal_lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_kelamin'),
                Tables\Columns\TextColumn::make('agama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kewarganegaraan'),
                Tables\Columns\TextColumn::make('kelas_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('orangtua_id')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListDataMurids::route('/'),
            'create' => Pages\CreateDataMurid::route('/create'),
            'edit' => Pages\EditDataMurid::route('/{record}/edit'),
        ];
    }
}
