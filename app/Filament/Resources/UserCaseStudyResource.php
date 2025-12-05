<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserCaseStudyResource\Pages;
use App\Filament\Resources\UserCaseStudyResource\RelationManagers;
use App\Models\UserCaseStudy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserCaseStudyResource extends Resource
{
    protected static ?string $model = UserCaseStudy::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Monitoring Pengguna';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationLabel = 'Tugas & Studi Kasus';

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
            'index' => Pages\ListUserCaseStudies::route('/'),
            'create' => Pages\CreateUserCaseStudy::route('/create'),
            'edit' => Pages\EditUserCaseStudy::route('/{record}/edit'),
        ];
    }
}
