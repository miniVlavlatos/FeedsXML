<?php

namespace Modules\FeedsXML\Admin;

use Modules\FeedsXML\Admin\Pages;
use Modules\FeedsXML\Admin\RelationManagers;
use Modules\FeedsXML\Models\Feeds;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeedsResource extends Resource
{
    protected static ?string $model = Feeds::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
            'index' => Pages\ListFeeds::route('/'),
            'create' => Pages\CreateFeeds::route('/create'),
            'edit' => Pages\EditFeeds::route('/{record}/edit'),
        ];
    }
}
