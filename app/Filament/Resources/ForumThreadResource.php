<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ForumThreadResource\Pages;
use App\Filament\Resources\ForumThreadResource\RelationManagers;
use App\Models\Interactive\ForumThreads;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ForumThreadResource extends Resource
{
    protected static ?string $model = ForumThreads::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationGroup = 'Media Interaksi';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Forum Diskusi';

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
            'index' => Pages\ListForumThreads::route('/'),
            'create' => Pages\CreateForumThread::route('/create'),
            'edit' => Pages\EditForumThread::route('/{record}/edit'),
        ];
    }
}
