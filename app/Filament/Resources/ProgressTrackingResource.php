<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgressTrackingResource\Pages;
use App\Filament\Resources\ProgressTrackingResource\RelationManagers;
use App\Models\ProgressTracking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProgressTrackingResource extends Resource
{
    protected static ?string $model = ProgressTracking::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationGroup = 'Monitoring Pengguna';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Progres Belajar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListProgressTrackings::route('/'),
            'create' => Pages\CreateProgressTracking::route('/create'),
            'edit' => Pages\EditProgressTracking::route('/{record}/edit'),
        ];
    }
}
